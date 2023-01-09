<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Thread;

class ThreadController extends Controller
{
    public function index()
    {
        //スレッド情報を取得して代入
        $threads = Thread::orderBy('created_at', 'desc')->get();

        //掲示板ページを表示
        return view('bbs/index', compact('threads'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //フォームに入力された情報をデータベースへ登録
        $threads = new Thread;
        $form = $request->all();
        $threads->fill($form)->save();
        return redirect('/');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //スレッド情報をデータベースから削除
        $thread = Thread::find($id)->delete();
        return redirect('/');
    }
}
