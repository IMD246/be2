<?php
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\lacontrol;
use App\Http\Controllers\bookController;
use App\Http\Controllers\authorController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UserAuth;

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
Route::get('/home',[TemplateController::class,'index']);//

Route::get('/index.blade.php',[TemplateController::class,'index']);//
Route::get('/',[TemplateController::class,'index']);//
Route::get('/contactus.blade.php',[TemplateController::class,'contactus']);//
Route::get('/404error.blade.php',[TemplateController::class,'r404error']);//
Route::get('/aboutus.blade.php',[TemplateController::class,'aboutus']);//
Route::get('/authors.blade.php',[TemplateController::class,'authors']);//
Route::get('/authordetail.blade.php',[TemplateController::class,'authordetail']);//
Route::get('/book_detail.blade.php',[TemplateController::class,'book_detail']);
Route::get('/cart.blade.php',[TemplateController::class,'cart']);
Route::get('/category_book.blade.php',[TemplateController::class,'category']);
Route::get('/handleCart.blade.php',[TemplateController::class,'handleCart']);
Route::get('/new_book.blade.php',[TemplateController::class,'new_book']);
Route::get('/SearchingBook.blade.php',[TemplateController::class,'searching_Book']);
Route::post('/book_detail.blade.php?idBook={id}',[TemplateController::class,'updateRate']);
//Auth
Route::get('redirects',[TemplateController::class,'getAuth']);
//best_sell
//book_detail.cart,category,handlecart,newbook
//Route logout
// Route::get('/logout', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


//Using veritification email
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::resource('book','bookController');
Route::resource('author','authorController');
Route::resource('category','categoryController');
Route::resource('template','templateController');
Route::post('book/search',[bookController::class,'search']);
Route::post('author/search',[authorController::class,'search']);
Route::post('category/search',[categoryController::class,'search']);
//Send email form user to admin
Route::get('/email', 'EmailController@create');
Route::post('/email', 'EmailController@sendEmail')->name('send.email');
//new sesstion

//////////////////////test

Route::get('/getLogin', function(){
    if(session()->has('user')){
      return redirect('information');
    }
    return view('getLogin');
});
Route::post('user',[UserAuth::class,'userLogin']);
Route::view('information','information');
Route::get('/klogout', function(){
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('getLogin');
});
