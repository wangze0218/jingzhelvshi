<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Http\Controllers\Behind;
use App\Model\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Business\UserBusiness;
use App\ResponseTrait;

class UserController
{
    use ResponseTrait;

    private $userBusiness;

    public function __construct(UserBusiness $userBusiness)
    {
        $this->userBusiness = $userBusiness;
    }

    public function index(Request $request)
    {
        $list = $this->userBusiness->userList();
        return view('behind.user.index',['list'=>$list]);
    }

    public function store(Request $request)
    {
        $in = $request->all();
        $identity = $in['identity'];
        $password = $in['password'];
        $user =  $this->userBusiness->signUp($identity,$password);
        return $this->_response(10000,'请求成功',$user);
    }

    public function create(Request $request)
    {
        return view('behind.user.create');
    }

    public function edit($id)
    {
        $user = $this->userBusiness->user($id);
        return view('behind.user.edit',['user'=>$user]);
    }

    public function update(Request $request,$id)
    {
        $in = $request->all();
        $identity = $in['identity'];
        $password = $in['password'];
        $user =  $this->userBusiness->userUpdate($id,$identity,$password);
        return $this->_response(10000,'请求成功',$user);
    }

    public function destroy($id)
    {
        UserModel::destroy($id);
        return $this->_response(10000,'删除成功');
    }

}