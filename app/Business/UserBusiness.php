<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Business;

use App\Model\UserModel;
use App\System\ResponseException;

class UserBusiness
{
    public function userList()
    {
        $users['data'] = UserModel::getRecordListCondition(['deleted_at'=>null],['*'],['created_at'=>'desc'],1,15);
        $users['count'] = UserModel::getRecordCountCondition(['deleted_at'=>null],['*'],['created_at'=>'desc'],1,15);
        return $users;
    }

    public function user($id)
    {
        return UserModel::find($id);
    }

    public function userUpdate($id,$identity,$password)
    {
        $password = md5($password);
        $this->userNameRepeat($identity,$id);

        $user = UserModel::updateRecordORM($id,[
            'user_name'=>$identity,
            'user_password'=>$password
        ]);
        return $user;
    }

    public function signOut()
    {
        //删除session
        \Session::pull('user_login');
        return redirect('/behind');
    }

    public function signIn($identity,$password,$remmber)
    {
        $password = md5($password);
        $user = UserModel::findRecordOneCondition([
            'user_name'=>$identity,
            'user_password'=>$password
        ]);
        if(!$user)return false;
        $this->signInSession($user);
        if($remmber) $this->remmber($user);
        return $user;
    }

    public function signUp($identity,$password)
    {
        $password = md5($password);
        $this->userNameRepeat($identity);

        $user = UserModel::create([
            'user_name'=>$identity,
            'user_password'=>$password
        ]);
        return $user;
    }

    private function signInSession($user)
    {
        \Session::put('user_login',$user);
    }

    private function remmber($user)
    {

    }

    private function userNameRepeat($identity,$id=0)
    {
        if($id){
            $user = UserModel::find($id);
            if($user->user_name != $identity){
                $num = UserModel::getRecordCountCondition([
                    'user_name'=>$identity
                ]);
                if($num>0) throw new ResponseException('用户名重复',20000);
            }
        }else{
            $num = UserModel::getRecordCountCondition([
                'user_name'=>$identity
            ]);
            if($num>0) throw new ResponseException('用户名重复',20000);
        }
        return false;
    }

}