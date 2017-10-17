<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Business;

use App\Model\ServiceModel;
use App\System\ResponseException;

class ServiceBusiness
{
    public function service($service_id)
    {
        $service = ServiceModel::find($service_id);
        return $service;
    }

    public function serviceCreate($service_name,$service_id,$summary_uuid,$service_areas_uuid)
    {
        $service = ServiceModel::create([
            'service_id'=>$service_id,
            'service_name'=>$service_name,
            'summary_uuid'=>$summary_uuid,
            'service_areas_uuid'=>$service_areas_uuid,
        ]);
        return $service;
    }

    //$where = [],$columns = ['*'],$order_by = [],$page = 0,$pageSize = 0
    public function serviceList($order_by=[])
    {
        $list['data'] = ServiceModel::getRecordListCondition([],['*'],$order_by);
        return $list;
    }

    public function serviceUpdate($id,$service_name)
    {
        $service = ServiceModel::updateRecordORM($id,[
            'service_name'=>$service_name,
        ]);
        return $service;
    }
}