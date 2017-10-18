<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 16:25
 */

namespace App\Model;
use App\Model\Model;

class TextModel extends Model
{
    protected $table = 'data_text';
    protected $primaryKey = 'text_id';

    protected $guarded=[];

}