<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Http\Controllers\Behind;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Business\FileBusiness;
use App\Business\NewsBusiness;
use App\Model\NewsModel;
use App\ResponseTrait;

class NewsController
{
    use ResponseTrait;

    private $NewsBusiness;

    public function __construct(NewsBusiness $NewsBusiness)
    {
        $this->NewsBusiness = $NewsBusiness;
    }

    public function index(Request $request)
    {
        $in = $request->all();
        $list = $this->NewsBusiness->NewsList(['id'=>'desc']);
        return view('behind.news.index',['list'=>$list]);
    }

    public function create(Request $request)
    {
        return view('behind.news.create');
    }

    public function store(Request $request)
    {
        $in = $request->all();
        $news_id = $this->getUuid();
        $news = $this->NewsBusiness->newsCreate($in['news_name'],$news_id);
        return $this->_response(10000,'请求成功',$news);
    }

    public function edit($id)
    {
        $news = $this->NewsBusiness->own($id);
        return view('behind.news.edit',['news'=>$news]);
    }

    public function update(Request $request,$id)
    {
        $in = $request->all();
        $News = $this->NewsBusiness->newsUpdate($id,$in['news_name']);
        return $this->_response(10000,'请求成功',$News);
    }

    public function destroy($id)
    {
        NewsModel::destroy($id);
        return $this->_response(10000,'删除成功');
    }


}