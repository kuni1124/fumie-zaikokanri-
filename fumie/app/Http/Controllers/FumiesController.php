<?php

namespace App\Http\Controllers;
use App\Fumie;
use Illuminate\Http\Request;

class FumiesController extends Controller
{
   
    public function index()
    {
        // メッセージ一覧を取得
        $gyoushas = Fumie::all();

        // メッセージ一覧ビューでそれを表示
        return view('gyousha.index', [
            'gyoushas' => $gyoushas,
        ]);
    }
    public function create()
    {
        $gyousha = new Fumie;
        
        // メッセージ作成ビューを表示
        return view('gyousha.create', [
            'gyousha' => $gyousha,
            
        ]);
    }
    public function store(Request $request)
    {
        // メッセージを作成
        $gyousha = new Fumie;
        $gyousha->gyousha_name = $request->gyousha_name;
        $gyousha->save();
        
        // トップページへリダイレクトさせる
        return redirect('/');
    }
    

    
}
