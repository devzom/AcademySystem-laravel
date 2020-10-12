<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

//TODO
//Route::get('/student', 'DashboardStudentController@index')->name('dashboardStudent');
//Route::get('/teacher', 'DashboardTeacherController@index')->name('dashboardTeacher');


//Route::get('/news', function (){
//
//    /*
//      $article = App\Article::all();
//      $article = App\Article::take(2)->get();
//      $article = App\Article::latest()->get();
//      $article = App\Article::paginate(1);
//    */
//
//    return view('news', [
//        'news'=> $news = App\Article::take(3)->latest()->get()
//    ]);
//});
//
//
//
//
//Route::get('/posts/{post}', 'PostsController@show');
