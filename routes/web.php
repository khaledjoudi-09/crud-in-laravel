<?php


use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


//احتاج راوت ليوصلني الى المعلومات في الانديكس 
Route::get('/', [PostController::class,'index'])->name('posts.index');
//احتاج راوت ليوصلني الى صفحة الاضافة للبوست  
Route::get('/add', [PostController::class,'create'])->name('posts.create');
//احتاج راوت ليوصل المعلومات الى الداتا بيز  
Route::post('/post', [PostController::class, 'store'])->name('posts.store');

//احتاج راوت  لعرض معلومات المنصر الواحد  
Route::get('/post/{post}', [PostController::class,'show'])->name('posts.show');
//احتاج راوت  لتعديل معلوماتد  
Route::get('/edit/{post}', [PostController::class,'edit'])->name('posts.edit');
//احتاج راوت  لتحديث معلوماتد  
Route::put('/edit/{post}', [PostController::class,'update'])->name('posts.update');
//احتاج راوت  للحذف معلوماتد  
Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('posts.delete');
