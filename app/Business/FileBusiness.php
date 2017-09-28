<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 * 系统内部文件处理
 */

namespace App\Business;

use App\System\ResponseException;

class FileBusiness
{
    private $old_file_path;
    private $new_file_path = '/var/www/jingzhelvshi/public/img';
    private $extension;

    public function __construct()
    {

    }

    private function new_file_name($extension)
    {
        $rand = time() . mt_rand(10000, 99999999);
        $name = md5($rand).'.'.$extension;
        return $name;
    }

    private function orl_myfile($old_file_url)
    {
        $myfile = file_get_contents($old_file_url) or die("Unable to open file!");
        return $myfile;
    }

    private function new_myfile($new_file_url,$orl_myfile)
    {
        $myfile = fopen($new_file_url, "w") or die("Unable to open file!");
        fwrite($myfile, $orl_myfile);
        fclose($myfile);
    }

    public function boot($old_file_path,$extension)
    {
        $new_file_name = $this->new_file_name($extension);
        $old_file_url = $old_file_path;//.'.'.$extension
        if(file_exists($old_file_url)){
            $orl_myfile = $this->orl_myfile($old_file_url);
            $new_file_url = $this->new_file_path.'/'.$new_file_name;
            $this->new_myfile($new_file_url,$orl_myfile);
            unlink($old_file_path);
            return '/img/'.$new_file_name;
        }else{
            return false;
        }

    }
}