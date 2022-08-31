<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\CommunicationDetailController;

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

Route::get('/portal', function () {
    return view('welcome');
});

Route::view('/','web_home');

Route::view('/about','about');
Route::view('/work','work');
Route::view('/services','services');
Route::get('/contact',[WebController::class,'contact']);
Route::view('/boxless_register','boxless_challenge_registration');
Route::view('/boxless_registration-closed','boxless_challenge_reg_closed');
Route::view('/upload','upload');
Route::view('/test','test');

Route::get('weblitt', function () {
    return view('weblitt', [
        'mobiles' => ['OMH banner.png','OMH banner.png']
    ]);
});

Route::get('omh', function () {
    return view('omh', [
        'mobiles' => ['OMH Banner.png','OMH Banner.png'],
        'galleryImages'=>['Artboard 11 (3).png','Artboard 11.png','2.png','Artboard 4.png','ani_omh.mp4','Artboard 6.png','Artboard 1.png','Artboard 7.png','Artboard 11 (2).png'],
        'phone'=>'OMH mob.png',
        'video'=>'butter_mob.mp4'
    ]);
});

Route::get('eyewinsome', function () {
    return view('eyewinsome', [
        'mobiles' => ['OMH Banner.png','OMH Banner.png'],
        'galleryImages'=>['Artboard 2.png','Artboard 24.png','DECEMBER 19th POST.png','Artboard 28.png','ew_video2.mp4','Artboard 18.png','fifth.png','Artboard 17.png',
        'seventh.png'],
        'phone'=>'ew_mob.png',
        'video'=>'ew_video3.mp4'
    ]);
});

Route::get('saeedghani', function () {
    return view('saeedghani', [
        'mobiles' => ['OMH Banner.png','OMH Banner.png'],
        'galleryImages'=>['ghanis augustArtboard 11.png','Artboard 5.png','ghanis augustArtboard 3.png','Ghanis Sep-RecoveredArtboard 30.png',
        'ani_gn.mp4','Ghanis Sep-RecoveredArtboard 20.png','ghanis augustArtboard 14.png','ghanis augustArtboard 15.png','ghanis augustArtboard 28.png'],
        'phone'=>'sa_mob.png',
        'video'=>'ghani_mob.mp4'
    ]);
});

Route::get('dealsabad', function () {
    return view('dealsabad', [
        'mobiles' => ['OMH Banner.png','OMH Banner.png']
    ]);
});
Route::get('d', function () {
    return view('d', [
        'mobiles' => ['OMH Banner.png','OMH Banner.png']
    ]);
});

Route::post('/leadform',[LeadsController::class,'create_lead']);
Route::get('/lead_detail/{lead_id}',[LeadsController::class,'detail_view']);
//update status
Route::get('/change_lead_status/{lead_id}/{status_id}',[LeadsController::class,'update_status']);

Route::post('/add_comment',[CommunicationDetailController::class,'add_comment']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
