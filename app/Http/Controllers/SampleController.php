<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample;

class SampleController extends Controller
{
    //
    public function index()
    {
        // phpでは var_dump() で変数をチェックしてた
        // laravelでは dd() を使うと便利
        // dump + die の合わせたメソッド

        //dd('indexが見れていればok');

        // phpの時は連想配列でDBから情報取得してた
        // laravelは連想配列を拡張したCollectino型で取得

        // phpの時は
        // PDOでstmt, プレースホルダ, bind, execute

        // laravelは裏側で処理してくれて、コード書くのはすっきり
        //dd(Sample::all());
        $samples = Sample::all();
        //dd($samples);

        // resources/viewsの中のファイルの場所
        // 変数をview側に渡す方法　compact() ... phpの関数
        // を使うと簡単に渡せる
        return view('samples.index', compact('samples'));
    }

    public function create()
    {
        return view('samples.create');
    }

    public function store(Request $request)
    {
        // phpの時は
        // $_GETか$_POSTでフォームに入力されていた値を受け取っていた
        // $_REQUEST ($_GET + $_POST + $_COKKIE)

        // laravelでは$_REQUESTを拡張したRequestクラスで
        // フォームの値を取得できる
        
        //dd($request->name, $request->email);

        Sample::create([
            'name' => $request['name'],
            'email' => $request['email'],
        ]);
          
        session()->flash('flash_message', '登録okです');
          
        return redirect()->route('samples.index');
    }
}
