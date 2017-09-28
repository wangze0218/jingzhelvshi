<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Business\UserBusiness;

class SignInController
{
    private $userBusiness;

    public function __construct(UserBusiness $userBusiness)
    {
        $this->userBusiness = $userBusiness;
    }

    public function index(Request $request)
    {
        return view('front.sign');
    }

    public function store(Request $request)
    {
        $in = $request->all();
        $identity = $in['identity'];
        $password = $in['password'];
        $remmber = isset($in['remmber'])?1:0;

        $user = $this->userBusiness->signIn($identity,$password,$remmber);
        if(!$user) return back()->withErrors('身份或者密码不对');
        return redirect('/behind/');
    }

    public function create()
    {
        $this->userBusiness->signOut();
        return redirect('');
    }
}