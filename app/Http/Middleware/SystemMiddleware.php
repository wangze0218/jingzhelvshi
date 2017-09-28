<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/30
 * Time: 16:05
 */

namespace App\Http\Middleware;

use Closure;
use App\System\ResponseException;

class SystemMiddleware
{
    public function handle($request, Closure $next)
    {
        try{
            $res =  $next($request);

        }catch (ResponseException $e)
        {
            $responseCode = $e->getCode();
            $responseMsg = $e->getMessage();
            $responseData = $e->getLine();

            return $this->_response($responseCode,$responseMsg,$responseData);
        }
        return $res;
    }

    function _response($responseMsg,$responseCode,$responseData){
        return response()->json([
            'code'=>$responseCode,
            'msg'=>$responseMsg,
            'date'=>$responseData
        ]);
    }
}