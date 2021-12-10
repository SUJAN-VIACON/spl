<?php


use App\Http\Controllers\addquestioncontroller;
use App\Http\Controllers\admissioncontroller;
use App\Http\Controllers\beststudent_controller;
use App\Http\Controllers\examcontroller;
use App\Http\Controllers\gallery_controller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\questioncontroller;
use App\Http\Controllers\pdfcontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[homecontroller::class,'home'])->name('home');
Route::get('/location',[homecontroller::class,'location'])->name('location');
Route::resource('beststudents',beststudent_controller::class);
Route::resource('gallerys',gallery_controller::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/home',[homecontroller::class,'redirect']);
Route::get('/admission',[homecontroller::class,'admission'])->name('admission')->middleware('admissionpass');
Route::post('/comment',[homecontroller::class,'comment'])->name('comment');
Route::resource('addquestion', addquestioncontroller::class);
Route::get('/viewcomment',[homecontroller::class,'viewcomment'])->name('viewcomment');
Route::get('/addcomment/{id}',[homecontroller::class,'commentadd'])->name('addcomment');
Route::get('/deletecomment{id}',[homecontroller::class,'deletecomment'])->name('deletecomment');
Route::get('/deleteaddcomment{id}',[homecontroller::class,'deleteaddcomment'])->name('deleteaddcomment');
Route::post('/admissiondata',[homecontroller::class,'admissiondata'])->name('admissiondata');
Route::get('/userinfo',[homecontroller::class,'userinfo'])->name('userinfo');

Route::get('/viewadmission',[admissioncontroller::class,'viewadmission'])->name('viewadmission');
Route::get('/addadmission{id}',[admissioncontroller::class,'addadmission'])->name('addadmission');
Route::get('/removeadmission{id}',[admissioncontroller::class,'removeadmission'])->name('removeadmission');
Route::get('/editadmission{id}',[admissioncontroller::class,'editadmission'])->name('editadmission');
Route::get('/deleteadmission{id}',[admissioncontroller::class,'deleteadmission'])->name('deleteadmission');



Route::get('/exam',[examcontroller::class,'showexam'])->name('exam');
Route::post('/storeexam',[examcontroller::class,'storeexam'])->name('storeexam');
Route::get('/examstudent{id}',[examcontroller::class,'examstudent'])->name('examstudent');
Route::get('/exammail{id}',[examcontroller::class,'exammail'])->name('exammail');
Route::get('/examers',[examcontroller::class,'examers'])->name('examers');
Route::get('/examdelete{id}',[examcontroller::class,'examdelete'])->name('examdelete');
Route::get('/exameventstart{id}',[examcontroller::class,'exam_event_start'])->name('exam.event.start');
Route::get('/exameventstop{id}',[examcontroller::class,'exam_event_stop'])->name('exam.event.stop');
Route::get('/selecter{id}',[examcontroller::class,'selecter'])->name('selecter');
Route::get('/studentanswer{id}',[examcontroller::class,'student_answer'])->name('student_answer');


Route::get('/question',[questioncontroller::class,'show_question'])->name('question');
Route::get('/ajaxquestion',[questioncontroller::class,'ajax_show_question'])->name('ajaxquestion');
Route::get('/savequestion',[questioncontroller::class,'savequestion'])->name('savequestion');
Route::get('/clearquestion',[questioncontroller::class,'clearquestion'])->name('clearquestion');
Route::get('/submit',[questioncontroller::class,'submit'])->name('submit');



Route::get('/result',[questioncontroller::class,'result'])->name('result');
Route::get('/student_result',[examcontroller::class,'student_result'])->name('student.result');
Route::get('/delete_result{id}',[examcontroller::class,'delete_result'])->name('delete.result');


// pdf converter
Route::get('/pdfview',[pdfcontroller::class,'pdf_view'])->name('pdf_view');
Route::get('/pdfconverter',[pdfcontroller::class,'pdf_converter'])->name('pdf_converter');