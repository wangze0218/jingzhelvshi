<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Business;

use App\Model\NewsModel;
use App\System\ResponseException;

class NewsBusiness
{
    public function own( $news_id , $columns = ['*'] )
    {
        $own = NewsModel::findRecordOneCondition(['news_id'=>$news_id],$columns);
        return json_decode(json_encode($own),1);
    }

    public function newsCreate($news_name,$news_id)
    {
        $news = NewsModel::create([
            'news_id'=>$news_id,
            'news_name'=>$news_name,
        ]);
        return $news;
    }

    //$where = [],$columns = ['*'],$order_by = [],$page = 0,$pageSize = 0
    public function newsList($order_by=[])
    {
        $list['data'] = NewsModel::getRecordListCondition([],['*'],$order_by);
        return $list;
    }

    public function newsUpdate($id,$news_name)
    {
        $news = NewsModel::updateRecordORM($id,[
            'news_name'=>$news_name,
        ]);
        return $news;
    }
}