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
use App\Business\CompanyBusiness;
use App\ResponseTrait;
use Illuminate\Support\Facades\Redirect;

class CompanyController
{
    use ResponseTrait;

    private $companyBusiness;

    public function __construct(CompanyBusiness $companyBusiness)
    {
        $this->companyBusiness = $companyBusiness;
    }

    public function index(Request $request)
    {
        $own = $this->companyBusiness->own();
        return view('behind.company.index',['own'=>$own]);
    }

    public function store(Request $request)
    {
        $in = $request->all();
        $company_name = $in['company_name'];
        $company_tell = $in['company_tell'];
        $company_email = $in['company_email'];
        $company_address = $in['company_address'];
        $company_info = $in['company_info'];
        $user =  $this->companyBusiness->create( $company_name , $company_tell , $company_email , $company_address , $company_info );
        return $this->_response(10000,'请求成功',$user);
    }
}