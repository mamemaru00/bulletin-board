<?php

namespace App\Http\Controllers;
use App\Models\Thread;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ThreadController extends Controller
{
    public function index()
    {
        //スレッド情報を取得して代入
        $threads = Thread::all();

        //掲示板ページを表示
        return view('bbs/index', compact('threads'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
        //
    }
}
