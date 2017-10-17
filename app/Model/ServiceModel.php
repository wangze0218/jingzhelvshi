<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 16:25
 */

namespace App\Model;
use App\Model\Model;

class ServiceModel extends Model
{
    protected $table = 'data_service';
    protected $primaryKey = 'service_id';
    protected $keyType = 'char';

    protected $guarded=[];

}