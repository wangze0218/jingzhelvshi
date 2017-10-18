<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Http\Controllers\Front;
use App\Business\ServiceArticleBusiness;
use App\Business\ServiceBusiness;
use App\Business\TeamArticleBusiness;
use App\Business\TeamBusiness;
use App\Business\NewsArticleBusiness;
use App\Business\NewsBusiness;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController
{
    public function __construct()
    {

    }

    public function service( Request $request , ServiceBusiness $serviceBusiness , ServiceArticleBusiness $articleBusiness )
    {
        $in = $request->all();
        $page = empty($in['page'])?1:$in['page'];

        $article_type = $articleBusiness->article_type(empty($in['rel_type_id'])?'':$in['rel_type_id']);
        $where = [
            'rel_type_id'=>$article_type
        ];
        $page_size = 15;
        $service = $serviceBusiness->service($article_type);
        $list = $articleBusiness->articleList($where,$page,$page_size,['updated_at'=>'desc']);
        $page_num = $list['page_num'];
        $page_view = $this->page_view($page,$page_num,'/solution/');
        $article_all_type = $articleBusiness->article_all_type();
        return view('front.services',[
            'service'=>$service,
            'list'=>$list,
            'page_view'=>$page_view,
            'article_all_type'=>$article_all_type
        ]);
    }

    public function team( Request $request , TeamBusiness $business , TeamArticleBusiness $articleBusiness )
    {
        $in = $request->all();
        $page = empty($in['page'])?1:$in['page'];

        $article_type = $articleBusiness->article_type(empty($in['rel_type_id'])?'':$in['rel_type_id']);
        $where = [
            'rel_type_id'=>$article_type
        ];
        $page_size = 15;
        $own = $business->own($article_type);
        $list = $articleBusiness->articleList($where,$page,$page_size,['updated_at'=>'desc']);
        $page_num = $list['page_num'];
        $page_view = $this->page_view($page,$page_num,'/solution/');
        $article_all_type = $articleBusiness->article_all_type();
        return view('front.team',[
            'own'=>$own,
            'list'=>$list,
            'page_view'=>$page_view,
            'article_all_type'=>$article_all_type
        ]);
    }

    public function news( Request $request , NewsBusiness $business , NewsArticleBusiness $articleBusiness )
    {
        $in = $request->all();
        $page = empty($in['page'])?1:$in['page'];

        $article_type = $articleBusiness->article_type(empty($in['rel_type_id'])?'':$in['rel_type_id']);
        $where = [
            'rel_type_id'=>$article_type
        ];
        $page_size = 15;
        $own = $business->own($article_type);
        $list = $articleBusiness->articleList($where,$page,$page_size,['updated_at'=>'desc']);
        $page_num = $list['page_num'];
        $page_view = $this->page_view($page,$page_num,'/solution/');
        $article_all_type = $articleBusiness->article_all_type();
        return view('front.news',[
            'own'=>$own,
            'list'=>$list,
            'page_view'=>$page_view,
            'article_all_type'=>$article_all_type
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