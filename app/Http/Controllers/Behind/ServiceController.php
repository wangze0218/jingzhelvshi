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
use App\Business\ServiceBusiness;
use App\Model\ServiceModel;
use App\ResponseTrait;

class ServiceController
{
    use ResponseTrait;

    private $ServiceBusiness;

    public function __construct(ServiceBusiness $ServiceBusiness)
    {
        $this->ServiceBusiness = $ServiceBusiness;
    }

    public function index(Request $request)
    {
        $in = $request->all();
        $list = $this->ServiceBusiness->ServiceList(['id'=>'desc']);
        return view('behind.service.index',['list'=>$list]);
    }

    public function create(Request $request)
    {
        return view('behind.service.create');
    }

    public function store(Request $request)
    {
        $in = $request->all();
        $service_id = $this->getUuid();
        $summary_uuid = $this->getUuid();
        $service_areas_uuid = $this->getUuid();
        $Service = $this->ServiceBusiness->serviceCreate($in['service_name'],$service_id,$summary_uuid,$service_areas_uuid);
        return $this->_response(10000,'请求成功',$Service);
    }

    public function edit($id)
    {
        $service = $this->ServiceBusiness->service($id);
        return view('behind.service.edit',['service'=>$service]);
    }

    public function update(Request $request,$id)
    {
        $in = $request->all();
        $Service = $this->ServiceBusiness->serviceUpdate($id,$in['service_name']);
        return $this->_response(10000,'请求成功',$Service);
    }

    public function destroy($id)
    {
        ServiceModel::destroy($id);
        return $this->_response(10000,'删除成功');
    }


}