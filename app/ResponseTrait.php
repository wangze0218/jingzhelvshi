<?php
namespace App;
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/9/2
 * Time: 下午10:06
 */
use Ramsey\Uuid\Uuid;

trait ResponseTrait{
    public function _response($responseCode,$responseMsg,$responseData = []){
        return response()->json([
            'code'=>$responseCode,
            'msg'=>$responseMsg,
            'date'=>$responseData
        ]);
    }

    public function getUuid()
    {
        $uuid = Uuid::uuid1();
        return str_replace('-', '', $uuid);
    }
    
}