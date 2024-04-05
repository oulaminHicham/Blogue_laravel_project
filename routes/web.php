<?php
use Illuminate\Support\Facades\Route;
//
use function Termwind\style;
use App\Http\Controllers\BlogController;
Route::get('/', function () {
    return view('welcome');
});
//the index route
Route::get('/posts' , [BlogController::class , 'index'])->name(name:'posts.index');
// store the posts route
Route::get('/posts/create' , [BlogController::class , 'create'])->name(name:'posts.create');
// store route
Route::post('/posts' ,[BlogController::class , 'store']) ->name(name:'posts.store');
// show details of blogs route
Route::get('/posts/{post}' , [BlogController::class , 'show'])->name(name:'posts.show');
// edit posts route
Route::get('/posts/{post}/edit' , [BlogController::class , 'edit'])->name(name:'posts.edit');
// update posts route
Route::put('/posts/{post}' , [BlogController::class , 'update'])->name(name:'posts.update');
//delete post route
Route::delete('/posts/{post}' , [BlogController::class , 'destroy']) ->name(name:'posts.destroy');


















