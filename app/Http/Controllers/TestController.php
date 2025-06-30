<?php
//名前空間　同じ名前の関数・メソッド等を使う仕組み
namespace App\Http\Controllers;
//継承用のControllerクラスとRequestクラスを使うためにインポート
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test;//エロクアントで使うTestモデルをインポート

//コントローラー本体
class TestController extends Controller
{
    //viewsの中のtestsフォルダの中のtest.blade.phpを参照
    public function index(){
        //DB処理 エロクアント⇒モデル名::メソッドで様々な処理が可能　
        $values = Test::all();
        //die + vardamp その時点で処理を止めて、中身を表示する
        // dd($values);
        return view('tests.test',compact('values'));
    }
}
