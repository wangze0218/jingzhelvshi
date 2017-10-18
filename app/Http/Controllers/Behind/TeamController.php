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
use App\Business\TeamBusiness;
use App\Model\TeamModel;
use App\ResponseTrait;

class TeamController
{
    use ResponseTrait;

    private $TeamBusiness;

    public function __construct(TeamBusiness $TeamBusiness)
    {
        $this->TeamBusiness = $TeamBusiness;
    }

    public function index(Request $request)
    {
        $in = $request->all();
        $list = $this->TeamBusiness->TeamList(['id'=>'desc']);
        return view('behind.team.index',['list'=>$list]);
    }

    public function create(Request $request)
    {
        return view('behind.team.create');
    }

    public function store(Request $request)
    {
        $in = $request->all();
        $team_id = $this->getUuid();
        $team = $this->TeamBusiness->teamCreate($in['team_name'],$team_id);
        return $this->_response(10000,'请求成功',$team);
    }

    public function edit($id)
    {
        $team = $this->TeamBusiness->own($id);
        return view('behind.team.edit',['team'=>$team]);
    }

    public function update(Request $request,$id)
    {
        $in = $request->all();
        $Team = $this->TeamBusiness->teamUpdate($id,$in['team_name']);
        return $this->_response(10000,'请求成功',$Team);
    }

    public function destroy($id)
    {
        TeamModel::destroy($id);
        return $this->_response(10000,'删除成功');
    }


}