<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 16:25
 */

namespace App\Model;
use App\Model\Model;

class ArticleModel extends Model
{
    protected $table = 'data_article';
    protected $primaryKey = 'article_id';

    protected $guarded=[];

}