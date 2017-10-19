<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Business;

use App\Model\ServiceModel;
use App\Model\TextModel;
use App\System\ResponseException;

class ServiceBusiness
{
    public function own( $service_id , $columns = ['*'] )
    {
        $own = ServiceModel::findRecordOneCondition(['service_id'=>$service_id],$columns);
        $own['service_areas'] = TextModel::getRecordLists(['rel_id'=>$own->service_areas_uuid],'text');
        $own['summary'] = TextModel::getRecordLists(['rel_id'=>$own->summary_uuid],'text');
        return json_decode(json_encode($own),1);
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

    public function serviceUpdate($id,$service_name,$service_areas,$summary)
    {
        $service = ServiceModel::updateRecordORM($id,[
            'service_name'=>$service_name,
        ]);
        $one = ServiceModel::find($id);
        if(!empty($service_areas)){
            $rel_id = $one->service_areas_uuid;
            TextModel::deleteRecordMass(['rel_id'=>$rel_id]);
            foreach ( $service_areas as $k => $v ){
                TextModel::create([
                    'rel_id'=>$rel_id,
                    'text'=>$v,
                    'text_type'=>1
                ]);
            }
        }
        if(!empty($summary)){
            $rel_id = $one->summary_uuid;
            TextModel::deleteRecordMass(['rel_id'=>$rel_id]);
            foreach ( $summary as $k => $v ){
                TextModel::create([
                    'rel_id'=>$rel_id,
                    'text'=>$v,
                    'text_type'=>1
                ]);
            }
        }
        return $service;
    }
}