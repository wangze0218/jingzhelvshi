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
use App\Business\ArticleBusiness;
use App\ResponseTrait;

class ArticleController
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
        $article_type = empty($in['article_type'])?1:$in['article_type'];
        $where = [
            'article_type'=>$article_type
        ];
        $page = 1;
        $page_size = 15;
        $list = $this->articleBusiness->articleList($where,$page,$page_size,['updated_at'=>'desc']);
        $page_num = ceil($list['count']/$page_size);
        return view('behind.article.index',['list'=>$list,'page_num'=>$page_num,'search'=>$where]);
    }

    public function create(Request $request)
    {
        return view('behind.article.create');
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
        $article = $this->articleBusiness->articleCreate($in['title'],$title_img,$in['title_describe'],$content,$in['article_type']);
        return $this->_response(10000,'请求成功',$article);
    }

    public function edit($id)
    {
        $article = $this->articleBusiness->article($id);
        $article->content = htmlspecialchars_decode($article->content);
        return view('behind.article.edit',['article'=>$article]);
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
        $article = $this->articleBusiness->articleUpdate($id,$in['title'],$title_img,$in['title_describe'],$content,$in['article_type']);
        return $this->_response(10000,'请求成功',$article);
    }

    public function destroy($id)
    {
        ArticleModel::destroy($id);
        return $this->_response(10000,'删除成功');
    }


}