<?php
//use文。このファイル内で扱うクラスをインポートするための機能

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Route::get('/contacts',[ContactFormController::class,'index'])->name('contacts.index');
//リソースコントローラー用のまとめてルート作成
// Route::resource('contacts',ContactFormController::class);




Route::prefix('contacts') // 頭に contacts をつける ​
->middleware(['auth']) // 認証 ​
->name('contacts.') // ルート名 ​
->controller(ContactFormController::class) // コントローラ指定 ​
->group(function(){ // グループ化 ​
	Route::get('/', 'index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/','store')->name('store');
    Route::get('/{id}','show')->name('show');
    Route::get('/{id}/edit','edit')->name('edit');
    Route::post('/{id}','update')->name('update');
    Route::post('/{id}/destroy','destroy')->name('destroy');
});


//テスト用ルーティング
//ルートには名前を付けることができる。名前を付けておくと、リンクを張るときに便利。
Route::get('tests/test',[TestController::class,'index'])->name('test.index');


//ルーティングの定義　Route::通信方法(post or get) (アドレス、処理)
//ex. [/]というURLにアクセスしたら　return view('welcome')という処理を行う。
//viewでビューファイルを表示。徐堂的にresoueces/viewの中身を参照し、welcome.blade.phpのファイルのみで指定できる。
Route::get('/', function () {
    return view('welcome');
});

//middleware(auth)=>認証機能。ログインしているユーザーでなければdashboardにアクセスできない。
//ログインしていないユーザーがアクセスすると
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
