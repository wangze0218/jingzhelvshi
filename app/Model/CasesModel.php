<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 16:25
 */

namespace App\Model;
use App\Model\Model;

class CasesModel extends Model
{
    protected $table = 'data_cases';
    protected $primaryKey = 'cases_id';
    protected $keyType = 'char';

    protected $guarded=[];

}