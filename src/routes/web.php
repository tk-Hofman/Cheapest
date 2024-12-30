<?php 

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// トップページをログインページにリダイレクト
Route::get('/', function() {
    return redirect(route('login'));
});

// アカウント編集
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// /list にアクセスした際に show.vue をレンダリング
Route::middleware('auth')->get('/list', function () {
    return Inertia::render('show', [
        'component' => 'Pages/List' // 動的に呼び出すコンポーネントを指定
    ]);
})->name('list');

Route::get('/test', function () {
    return Inertia::render('Pages/ProductDetails'); // 正しいパスを指定
});
require __DIR__.'/auth.php';