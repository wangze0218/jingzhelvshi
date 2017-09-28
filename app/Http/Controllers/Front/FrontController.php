<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Http\Controllers\Front;
use App\Business\ArticleBusiness;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController
{
    private $articleBusiness;
    public function __construct(ArticleBusiness $articleBusiness)
    {
        $this->articleBusiness = $articleBusiness;
    }

    public function service(Request $request)
    {
        $in = $request->all();
        $page = empty($in['page'])?1:$in['page'];
        $articles = $this->articleBusiness->articleList(['article_type'=>1],1,15,['article_id'=>'desc']);
        $page_num = $articles['page_num'];
        $articles = $articles['data']->toArray();
        $page_view = $this->page_view($page,$page_num,'/solution/');
        return view('front.service',[
            'articles'=>$articles,
            'page_view'=>$page_view,
        ]);
    }

    public function solution(Request $request)
    {
        $in = $request->all();
        $page = empty($in['page'])?1:$in['page'];
        $articles = $this->articleBusiness->articleList(['article_type'=>2],1,15,['article_id'=>'desc']);
        $page_num = $articles['page_num'];
        $articles = $articles['data']->toArray();
        $page_view = $this->page_view($page,$page_num,'/solution/');
        return view('front.solution',[
            'articles'=>$articles,
            'page_view'=>$page_view,
        ]);
    }

    public function news_center(Request $request)
    {
        $in = $request->all();
        $page = empty($in['page'])?1:$in['page'];
        $articles = $this->articleBusiness->articleList(['article_type'=>3],1,15,['article_id'=>'desc']);
        $page_num = $articles['page_num'];
        $articles = $articles['data']->toArray();
        $page_view = $this->page_view($page,$page_num,'/solution/');
        return view('front.news_center',[
            'articles'=>$articles,
            'page_view'=>$page_view,
        ]);
    }

    public function company_dynamics(Request $request)
    {
        $in = $request->all();
        $page = empty($in['page'])?1:$in['page'];
        $articles = $this->articleBusiness->articleList(['article_type'=>4],1,15,['article_id'=>'desc']);
        $page_num = $articles['page_num'];
        $articles = $articles['data']->toArray();
        $page_view = $this->page_view($page,$page_num,'/solution/');
        return view('front.company_dynamics',[
            'articles'=>$articles,
            'page_view'=>$page_view,
        ]);
    }

    public function details(Request $request,$id)
    {
        $in = $request->all();
        $articles = $this->articleBusiness->article($id);
        return view('front.details',[
            'articles'=>$articles,
        ]);
    }

    private function page_view($page,$page_num,$url)
    {
        $previous_url = ($page == 1)?'#':$url.$page-1;
        $next_url = ($page == $page_num)?'#':$url.$page+1;
        $str = "<div class=\"row\">
                <div class=\"bs-example\" data-example-id=\"simple-pager\">
                    <nav aria-label=\"...\" class=\"page\">
                        <ul class=\"pager\">
                            <li><a href=".$previous_url.">上一页</a></li>
                            <li><a href=".$next_url.">下一页</a></li>
                        </ul>
                    </nav>
                </div>
            </div>";
        return $str;
    }


}