<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Business;

use App\Model\ArticleModel;
use App\Model\ServiceModel;
use App\System\ResponseException;

class ServiceArticleBusiness extends ArticleBusinessAbstract
{
    public function article( $article_id )
    {
        $article = ArticleModel::find( $article_id )->toArray();
        $business = $this->setBusiness( 'App\Business\ServiceBusiness' );
        $business_info = $business->own( $article['rel_type_id'] , ['service_id as id','service_name as name'] );
        $article['business_info']['id'] = $business_info['id'];
        $article['business_info']['name'] = $business_info['name'];
        return $article;
    }

    public function article_all_type()
    {
        $type = ServiceModel::getRecordListCondition([],['service_id','service_name'])->toArray();
        return $type;
    }

    public function article_type($rel_type_id = '')
    {
        if(!is_string($rel_type_id)) throw new ResponseException('文章类型不是一个字符串',20001);
        $type_ids = ServiceModel::getRecordLists([],'service_id')->toArray();
        if(in_array($rel_type_id,$type_ids)){
            return $rel_type_id;
        }else{
            return $type_ids[0];
        }
    }
    
    
}