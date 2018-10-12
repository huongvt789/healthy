<?php

namespace App\Http\Controllers\Backend;

use App\Model\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{

    /**
     * MemberController constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $param = $this->request->toArray();
        if(isset($param['name'])){
        $member = Member::search($param);
        $member->appends(['search' => $param['name']]);
        }
        else{
            $member = Member::search();
        }
        return view('backend.member.index', ['member' => $member, 'param' => $param])->render();
    }

    public function create()
    {

        return view('backend.member.create');
    }

    public function store(Request $request)
    {
        $member = new Member();
        $member->createAccount($request);
        if ($member) {
            return redirect()->route('member')->with('message', '担当者マスタが新規登録されました。');
        }
        return redirect()->route('member')->with('error', '担当者マスタの登録に失敗しました。');
    }
}
