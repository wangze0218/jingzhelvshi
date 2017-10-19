<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Business;

use App\Model\CompanyModel;
use App\System\ResponseException;

class CompanyBusiness
{
    public function own()
    {
        $own = CompanyModel::findRecordOneCondition();
        if(!$own) {
            $own['company_name'] = '';
            $own['company_tell'] = '';
            $own['company_email'] = '';
            $own['company_address'] = '';
            $own['company_info'] = '';
        }
        return json_decode(json_encode($own),1);
    }

    public function create( $company_name , $company_tell , $company_email , $company_address , $company_info )
    {
        $own = CompanyModel::findRecordOneCondition();
        if(!$own){
            return CompanyModel::create([
                'company_name'=>$company_name,
                'company_tell'=>$company_tell,
                'company_email'=>$company_email,
                'company_address'=>$company_address,
                'company_info'=>$company_info,
            ]);
        }else{
            return CompanyModel::updateRecordORM($own->company_id,[
                'company_name'=>$company_name,
                'company_tell'=>$company_tell,
                'company_email'=>$company_email,
                'company_address'=>$company_address,
                'company_info'=>$company_info,
            ]);
        }
    }
}