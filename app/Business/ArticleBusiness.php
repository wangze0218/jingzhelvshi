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

class ArticleBusiness
{
    public function article($article_id)
    {
        $article = ArticleModel::find($article_id);
        return $article;
    }

    public function articleCreate($title,$title_img,$title_describe,$content,$article_type)
    {
        $article = ArticleModel::create([
            'title'=>$title,
            'title_img'=>$title_img,
            'title_describe'=>$title_describe,
            'content'=>$content,
            'article_type'=>$article_type,
        ]);
        return $article;
    }

    //$where = [],$columns = ['*'],$order_by = [],$page = 0,$pageSize = 0
    public function articleList($where,$page,$page_size = 15,$order_by=[])
    {
        $list['data'] = ArticleModel::getRecordListCondition(
            $where,
            ['article_id','title','title_img','title_describe','article_type'],
            $order_by,
            $page,
            $page_size
        );
        // 1产品与服务，2案例，3新闻
        if(!empty($list['data'])){
            foreach ($list['data'] as $k=>$v){
                switch ($v->article_type){
                    case 1:
                        $list['data'][$k]->article_type_name = '产品与服务';
                        break;
                    case 2:
                        $list['data'][$k]->article_type_name = '案例';
                        break;
                    case 3:
                        $list['data'][$k]->article_type_name = '新闻';
                        break;
                }
            }
        }
        $list['count'] = ArticleModel::getRecordCountCondition(
            $where,
            ['article_id','title','title_img','title_describe','article_type'],
            ['updated_at'=>'desc']
        );
        if($page && $page_size){
            $list['page_num'] = ceil($list['count']/$page_size);
            $list['page'] = $page;
        }
        return $list;
    }

    public function articleUpdate($id,$title,$title_img,$title_describe,$content,$article_type)
    {
        $article = ArticleModel::updateRecordORM($id,[
            'title'=>$title,
            'title_img'=>$title_img,
            'title_describe'=>$title_describe,
            'content'=>$content,
            'article_type'=>$article_type,
        ]);
        return $article;
    }
}