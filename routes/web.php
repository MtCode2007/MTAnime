<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AnimesController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogCommentsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\EpisoidesController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StudioController;
use App\Http\Middleware\Admin;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/',function(){
//     return redirect()->route('anime.index');
// });

// Route::get('/home',function(){
//     return redirect()->route('anime.index');
// });

// Route::resource("anime",AnimesController::class);
// // Route::resource("add_episoide",EpisoidesController::class);

// #Route::get('add_episoide/{id}',[EpisoidesController::class,'create'])->name('episoide.create');
// Route::get('add_episoide/create/{id}',function( $id){
//     return view('admin.add_episoide')->with('ab',9000);
// });

// Route::post('add_episoide/store',['EpisoidesController','store'])->name('episoide.store');
// Route::get('episoide/show/{id}','EpisoidesController@show')->name('episoide.show');
// Route::get('add_episoide/edit/{id}','EpisoidesController@edit')->name('episoide.edit');
// Route::post('add_episoide/update/{id}','EpisoidesController@update')->name('episoide.update');
// Route::get('add_episoide/destroy/{id}','EpisoidesController@destroy')->name('episoide.destroy');


Auth::routes();

// Route::get('/anime/{anime}',[EpisoidesController::class,'index'])->name('episoides.index');

Route::get('/',[AnimesController::class,'index'])->name('animes.index');
Route::any('/{anime}/show',[AnimesController::class,'show'])->name('animes.show');

Route::get('/episoides/{episoide}/show',[EpisoidesController::class,'show'])->name('episoides.show');



Route::get('admin',function(){
    return view('admin.index');
})->middleware([Admin::class,Authenticate::class])->name('admin.index');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/create/anime',[AnimesController::class,'create'])->name('animes.create')->middleware([Admin::class,Authenticate::class]);

Route::post('/store',[AnimesController::class,'store'])->name('animes.store')->middleware([Admin::class,Authenticate::class]);

Route::delete('/{anime}/delete',[AnimesController::class,'destroy'])->name('animes.delete')->middleware([Admin::class,Authenticate::class]);;

Route::post('/{anime}/update',[AnimesController::class,'update'])->name('animes.update')->middleware([Admin::class,Authenticate::class]);;

Route::get('/episoides/create',[EpisoidesController::class,'create'])->name('episoides.create')->middleware([Admin::class,Authenticate::class]);;

Route::post('/episoides/store',[EpisoidesController::class,'store'])->name('episoides.store')->middleware([Admin::class,Authenticate::class]);;

Route::delete('/episoides/{recipe}/delete',[EpisoidesController::class,'destroy'])->name('episoides.delete')->middleware([Admin::class,Authenticate::class]);;

Route::post('/episoides/{recipe}/update',[EpisoidesController::class,'update'])->name('episoides.update')->middleware([Admin::class,Authenticate::class]);;

Route::post('/comments/store',[CommentsController::class,'store'])->name('comments.store')->middleware(Authenticate::class);

Route::post('/{comment}/update',[CommentsController::class,'update'])->name('comments.update');

// Route::get('/{anime}/show',[AnimesController::class,'show'])->name('comments.index');



Route::get('/blog',[BlogController::class,'index'])->name('blog.index');

Route::get('/blog/create',[BlogController::class,'create'])->name('blog.create')->middleware(Authenticate::class,Admin::class);

Route::get('/blog/edit',[BlogController::class,'edit'])->name('blog.edit')->middleware(Authenticate::class,Admin::class);

Route::post('/blog/store',[BlogController::class,'store'])->name('blog.store')->middleware(Authenticate::class,Admin::class);

Route::any('/blog/{blog}/show',[BlogController::class,'show'])->name('blog.show');

Route::delete('/blog/{blog}/delete',[BlogController::class,'destroy'])->name('blog.delete')->middleware(Authenticate::class,Admin::class);

Route::put('/blog/{blog}/update',[BlogController::class,'update'])->name('blog.update')->middleware(Authenticate::class,Admin::class);



Route::get('/blog/create/category',[BlogCategoryController::class,'create'])->name('category.create')->middleware(Authenticate::class,Admin::class);
Route::post('/blog/store/category',[BlogCategoryController::class,'store'])->name('category.store');


Route::post('/blog/{blog}/store',[BlogCommentsController::class,'store'])->name('blog.comments.store')->middleware(Authenticate::class);



Route::get('about-us',[AboutController::class,'index'])->name('about-us');
Route::put('about-us/update',[AboutController::class,'update'])->name('about-us.update');
Route::get('about-us/edit',[AboutController::class,'edit'])->name('about-us.edit')->middleware(Authenticate::class,Admin::class);

Route::get('/{anime}/watch',[AnimesController::class,'watch'])->name('animes.watch');


Route::get('/create/studio',[StudioController::class,'create'])->name('studio.create')->middleware(Authenticate::class,Admin::class);
Route::post('/studio/store',[StudioController::class,'store'])->name('studio.store')->middleware(Authenticate::class,Admin::class);


Route::get('/profile',function(){
    return view('profile.index');
});


Route::get('/create/slider',[SliderController::class,'create'])->name('slider.create')->middleware([Authenticate::class,Admin::class]);
Route::post('/slider/store',[SliderController::class,'store'])->name('slider.store')->middleware([Authenticate::class,Admin::class]);