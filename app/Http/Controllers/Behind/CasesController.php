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
use App\Business\CasesBusiness;
use App\Model\CasesModel;
use App\ResponseTrait;

class CasesController
{
    use ResponseTrait;

    private $CasesBusiness;

    public function __construct(CasesBusiness $CasesBusiness)
    {
        $this->CasesBusiness = $CasesBusiness;
    }

    public function index(Request $request)
    {
        $in = $request->all();
        $list = $this->CasesBusiness->CasesList(['id'=>'desc']);
        return view('behind.cases.index',['list'=>$list]);
    }

    public function create(Request $request)
    {
        return view('behind.cases.create');
    }

    public function store(Request $request)
    {
        $in = $request->all();
        $cases_id = $this->getUuid();
        $cases = $this->CasesBusiness->casesCreate($in['cases_name'],$cases_id);
        return $this->_response(10000,'请求成功',$cases);
    }

    public function edit($id)
    {
        $cases = $this->CasesBusiness->own($id);
        return view('behind.cases.edit',['cases'=>$cases]);
    }

    public function update(Request $request,$id)
    {
        $in = $request->all();
        $Cases = $this->CasesBusiness->casesUpdate($id,$in['cases_name']);
        return $this->_response(10000,'请求成功',$Cases);
    }

    public function destroy($id)
    {
        CasesModel::destroy($id);
        return $this->_response(10000,'删除成功');
    }


}