<?php
//namespace(名前空間)　同じ関数名を使用するための仕組み。
namespace App\Models;
//Modelというクラスをインポート。TestクラスでModelクラスを継承するため。
use Illuminate\Database\Eloquent\Model;
//Testクラスのコード。extends(継承)。TestクラスはModelクラスを継承している。
class Test extends Model
{
    //処理
}
