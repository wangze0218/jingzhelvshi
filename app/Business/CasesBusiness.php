<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Business;

use App\Model\CasesModel;
use App\System\ResponseException;

class CasesBusiness
{
    public function own( $cases_id , $columns = ['*'] )
    {
        $own = CasesModel::findRecordOneCondition(['cases_id'=>$cases_id],$columns);
        return json_decode(json_encode($own),1);
    }

    public function casesCreate($cases_name,$cases_id)
    {
        $cases = CasesModel::create([
            'cases_id'=>$cases_id,
            'cases_name'=>$cases_name,
        ]);
        return $cases;
    }

    //$where = [],$columns = ['*'],$order_by = [],$page = 0,$pageSize = 0
    public function casesList($order_by=[])
    {
        $list['data'] = CasesModel::getRecordListCondition([],['*'],$order_by);
        return $list;
    }

    public function casesUpdate($id,$cases_name)
    {
        $cases = CasesModel::updateRecordORM($id,[
            'cases_name'=>$cases_name,
        ]);
        return $cases;
    }
}