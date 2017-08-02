<?php

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

Route::get('/','Index@Home');
Route::get('test/{token}','Index@Test');
Route::group(['middleware'=>'Guest'],function(){
	Route::get('facebook','Login@Redirect');
	Route::get('facebook/callback','Login@Callback');
});
Route::group(['middleware'=>'Login'],function(){
	Route::get('profile/myexams','Profile@myExams');
	Route::get('exam/{name}','Profile@showEnterExam');
	Route::get('results/{name}','Profile@showResults');

	Route::post('exam/{name}','Profile@enterExam');
});
Route::group(['middleware'=>'Islam'],function(){
	Route::get('exams','Exam@showExams');
	Route::get('create/exam','Exam@showCreateExam');
	Route::get('create/exam/{id}','Exam@showCreateExam');
	Route::get('edit/exam/{id}','Exam@showEditExam');
	Route::get('edit/exam/question/{id}','Exam@showEditExamQuestion');
	Route::get('delete/question/{id}','Exam@deleteQue');
	Route::get('show/exam/{name}','Exam@showExam');
	Route::get('results/exam/{id}','Exam@showResults');
	Route::get('results/exam/{id}/{user}','Exam@Results');
	Route::get('notes/{id}','Exam@showNotes');
	Route::get('stop/{id}','Exam@Stop');
	Route::get('setting/exam/{id}','Exam@showSetting');
	Route::get('students/exam/{id}','Exam@Students');
	Route::get('result/{id}','Exam@Result');
	Route::get('delete/exam/{id}','Exam@deleteExam');

	Route::post('edit/exam/question/{id}','Exam@editExam');
	Route::post('create/exam','Exam@createExam');
	Route::post('create/exam/{id}','Exam@createQuesExam');
	Route::post('notes/{id}','Exam@Notes');
});
Route::group(['middleware'=>'Admin'],function(){
	Route::get('artisans/{artisan}','Index@Artisan');
});
