<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 16:25
 */

namespace App\Model;
use App\Model\Model;

class TeamModel extends Model
{
    protected $table = 'data_team';
    protected $primaryKey = 'team_id';
    protected $keyType = 'char';

    protected $guarded=[];

}