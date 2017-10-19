<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Business;

use App\Model\TeamModel;
use App\System\ResponseException;

class TeamBusiness
{
    public function own( $team_id , $columns = ['*'] )
    {
        $own = TeamModel::findRecordOneCondition(['team_id'=>$team_id],$columns);
        return json_decode(json_encode($own),1);
    }

    public function teamCreate($team_name,$team_id)
    {
        $team = TeamModel::create([
            'team_id'=>$team_id,
            'team_name'=>$team_name,
        ]);
        return $team;
    }

    //$where = [],$columns = ['*'],$order_by = [],$page = 0,$pageSize = 0
    public function teamList($order_by=[])
    {
        $list['data'] = TeamModel::getRecordListCondition([],['*'],$order_by);
        return $list;
    }

    public function teamUpdate($id,$team_name)
    {
        $team = TeamModel::updateRecordORM($id,[
            'team_name'=>$team_name,
        ]);
        return $team;
    }
}