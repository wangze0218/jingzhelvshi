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
use App\Business\CompanyBusiness;
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
        $service = $serviceBusiness->own($article_type);
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

    public function company( CompanyBusiness $companyBusiness)
    {
        $own = $companyBusiness->own();
        dd($own);
    }

    public function aboutUs( CompanyBusiness $companyBusiness)
    {
        $own = $companyBusiness->own();
        return view('front.about_us',['own'=>$own]);
    }

    public function home( CompanyBusiness $companyBusiness)
    {
        $own = $companyBusiness->own();
        return view('front.home',['own'=>$own]);
    }

    public function service_page( Request $request , $id , ServiceArticleBusiness $articleBusiness)
    {
        $in = $request->all();
        $articles = $articleBusiness->article( $id );
        $two['url'] = "/services";
        $two['name'] = "专业领域";
        $three['url'] = "/services?rel_type_id=".$articles['business_info']['id'];
        $three['name'] = $articles['business_info']['name'];
        $breadcrumb = $this->breadcrumb($two,$three);
        return view('front.page',[
            'article'=>htmlspecialchars_decode($articles['content']),
            'breadcrumb'=>$breadcrumb
        ]);
    }

    public function team_page( Request $request , $id , TeamArticleBusiness $articleBusiness)
    {
        $in = $request->all();
        $articles = $articleBusiness->article( $id );
        $two['url'] = "/team";
        $two['name'] = "律师团队";
        $three['url'] = "/team?rel_type_id=".$articles['business_info']['id'];
        $three['name'] = $articles['business_info']['name'];
        $breadcrumb = $this->breadcrumb($two,$three);
        return view('front.page',[
            'article'=>htmlspecialchars_decode($articles['content']),
            'breadcrumb'=>$breadcrumb
        ]);
    }

    public function news_page( Request $request , $id , NewsArticleBusiness $articleBusiness)
    {
        $in = $request->all();
        $articles = $articleBusiness->article( $id );
        $two['url'] = "/news";
        $two['name'] = "律师行业新闻";
        $three['url'] = "/news?rel_type_id=".$articles['business_info']['id'];
        $three['name'] = $articles['business_info']['name'];
        $breadcrumb = $this->breadcrumb($two,$three);
        return view('front.page',[
            'article'=>htmlspecialchars_decode($articles['content']),
            'breadcrumb'=>$breadcrumb
        ]);
    }

    private function breadcrumb($two,$three)
    {
        $str  = "<ol class=\"breadcrumb\" style=\"margin-top: 10px; margin-bottom: 10px;\">";
        $str .= "<li><a href='/'>首页</a></li>";
        $str .= "<li><a class=\"active\" href=".$two['url'].">".$two['name']."</a></li>";
        $str .= "<li><a class=\"active\" href=".$three['url'].">".$three['name']."</a></li>";
        $str .= "</ol>";
        return $str;
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