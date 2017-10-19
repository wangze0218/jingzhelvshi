<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Business;

use App\Model\ArticleModel;
use App\System\ResponseException;
use App\Business\ServiceBusiness;

abstract class ArticleBusinessAbstract
{
    protected function setBusiness( $business_name )
    {
        return $this->business = new $business_name();
    }

    abstract function article($article_id);

    public function articleCreate($title,$title_img,$title_describe,$vice_title_describe,$content,$rel_type_id)
    {
        $article = ArticleModel::create([
            'title'=>$title,
            'title_img'=>$title_img,
            'title_describe'=>$title_describe,
            'vice_title_describe'=>$vice_title_describe,
            'content'=>$content,
            'rel_type_id'=>$rel_type_id,
        ]);
        return $article;
    }

    //$where = [],$columns = ['*'],$order_by = [],$page = 0,$pageSize = 0
    public function articleList($where,$page,$page_size = 15,$order_by=[])
    {
        $list['data'] = ArticleModel::getRecordListCondition(
            $where,
            ['article_id','title','title_img','title_describe','vice_title_describe','rel_type_id','created_at'],
            $order_by,
            $page,
            $page_size
        );
        $list['count'] = ArticleModel::getRecordCountCondition(
            $where
        );
        if($page && $page_size){
            $list['page_num'] = ceil($list['count']/$page_size);
            if( $list['page_num'] <= 0 ) $list['page_num'] = 1;
            $list['page'] = $page;
        }
        return json_decode(json_encode($list),1);
    }

    public function articleUpdate($id,$title,$title_img,$title_describe,$vice_title_describe,$content,$rel_type_id)
    {
        $article = ArticleModel::updateRecordORM($id,[
            'title'=>$title,
            'title_img'=>$title_img,
            'title_describe'=>$title_describe,
            'vice_title_describe'=>$vice_title_describe,
            'content'=>$content,
            'rel_type_id'=>$rel_type_id,
        ]);
        return $article;
    }
}