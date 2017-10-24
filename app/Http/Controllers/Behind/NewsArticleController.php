<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Http\Controllers\Behind;
use App\Business\FileBusiness;
use App\Model\ArticleModel;
use App\Model\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Business\NewsArticleBusiness as ArticleBusiness;
use App\ResponseTrait;

class NewsArticleController
{
    use ResponseTrait;

    private $articleBusiness;

    public function __construct(ArticleBusiness $articleBusiness)
    {
        $this->articleBusiness = $articleBusiness;
    }

    public function index(Request $request)
    {
        $in = $request->all();
        $article_type = $this->articleBusiness->article_type(empty($in['rel_type_id'])?'':$in['rel_type_id']);
        $where = [
            'rel_type_id'=>$article_type
        ];
        $page = 1;
        $page_size = 15;
        $list = $this->articleBusiness->articleList($where,$page,$page_size,['updated_at'=>'desc']);
        $page_num = ceil($list['count']/$page_size);
        $article_all_type = $this->articleBusiness->article_all_type();
        return view('behind.news_article.index',['list'=>$list,'page_num'=>$page_num,'search'=>$where,'article_all_type'=>$article_all_type]);
    }

    public function create(Request $request)
    {
        $article_all_type = $this->articleBusiness->article_all_type();
        return view('behind.news_article.create',['article_all_type'=>$article_all_type]);
    }

    public function store(Request $request)
    {
        $in = $request->all();
        $title_img = '';
        $content = '';
        if($request->hasFile('title_img') && $request->file('title_img')->isValid()){
            $path = $request->title_img->getRealPath();
            $extension = $request->title_img->extension();
            $file = new FileBusiness();
            $title_img = $file->boot($path,$extension);
        }
        if(isset($in['editorValue'])) $content = htmlspecialchars($in['editorValue']);
        $article = $this->articleBusiness->articleCreate($in['title'],$title_img,$in['title_describe'],$in['vice_title_describe'],$content,$in['rel_type_id']);
        return $this->_response(10000,'请求成功',$article);
    }

    public function edit($id)
    {
        $article = $this->articleBusiness->article($id);
        $article['content'] = htmlspecialchars_decode($article['content']);
        $article_all_type = $this->articleBusiness->article_all_type();
        return view('behind.news_article.edit',['article'=>$article,'article_all_type'=>$article_all_type]);
    }

    public function update(Request $request,$id)
    {
        $in = $request->all();
        $title_img = '';
        $content = '';
        if($request->hasFile('title_img') && $request->file('title_img')->isValid()){
            $path = $request->title_img->getRealPath();
            $extension = $request->title_img->extension();
            $file = new FileBusiness();
            $title_img = $file->boot($path,$extension);
        }
        if(isset($in['editorValue'])) $content = $in['editorValue'];
        $article = $this->articleBusiness->articleUpdate($id,$in['title'],$title_img,$in['title_describe'],$in['vice_title_describe'],$content,$in['rel_type_id']);
        return $this->_response(10000,'请求成功',$article);
    }

    public function destroy($id)
    {
        ArticleModel::destroy($id);
        return $this->_response(10000,'删除成功');
    }


}