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

class ArticleBusinessAbstract
{
    public function article($article_id)
    {
        $article = ArticleModel::find($article_id);
        return $article;
    }

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
            ['article_id','title','title_img','title_describe','rel_type_id'],
            $order_by,
            $page,
            $page_size
        );

        $list['count'] = ArticleModel::getRecordCountCondition(
            $where,
            ['article_id','title','title_img','title_describe','rel_type_id'],
            ['updated_at'=>'desc']
        );
        if($page && $page_size){
            $list['page_num'] = ceil($list['count']/$page_size);
            $list['page'] = $page;
        }
        return $list;
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