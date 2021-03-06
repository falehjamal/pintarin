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

// Route::get('/', function () {
//     return redirect('home');
// });

// Auth::routes();
// Route::get('login/kids','LoginController@kidslogin');
// Route::post('login/kids','LoginController@kidsloginPost');

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// // Route::get('/home', 'HomeController@index')->name('home');
// Route::post('dashboard/question/answer/insert','Kids\QuestionsController@insertAnswer');

// Route::get('/admin', 'AdminController@index');
// Route::resource('admin/subjects','SubjectController');
// Route::resource('admin/materials','MaterialController');
// Route::resource('admin/news','NewsController');
// Route::resource('admin/modules','ModuleController');

// Route::post('admin/modules/add-questions/{id}','ModuleController@addQuestions');
// Route::get('/dashboard','DashboardController@index');
// Route::resource('/dashboard/materials','Parent\MaterialController');
// Route::resource('/dashboard/questions','Kids\QuestionsController');
// Route::get('dashboard/materials/{material}/{subject}','Parent\MaterialController@detail');
// Route::get('dashboard/question/{material}/{subject}','Kids\QuestionsController@detail');
// Route::get('dashboard/question/{material}/{subject}/start','Kids\QuestionsController@start');
// Route::get('dashboard/question/{material}/{subject}/json','Kids\QuestionsController@listQuestions');
// Route::get('api/question/{id}','Kids\QuestionsController@getQuestionById');
// Route::resource('/dashboard/kids','Parent\KidsController');
// Route::get('/dashboard/kids-activity','DashboardController@kidsActivity');
// Route::get('/berita','BeritaController@index');
// Route::get('/berita/detail/{id}','BeritaController@store');
// Route::post('/api/questions/end','Kids\QuestionsController@end');


// Route::get('/', function () {
//     return redirect('home');
// });

Auth::routes();
Route::get('login/kids','LoginController@kidslogin');
Route::post('login/kids','LoginController@kidsloginPost');

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::post('dashboard/question/answer/insert','Kids\QuestionsController@insertAnswer');

Route::get('/admin', 'AdminController@index');
Route::resource('admin/subjects','SubjectController');
Route::resource('admin/materials','MaterialController');
Route::resource('admin/news','NewsController');
Route::resource('admin/modules','ModuleController');
Route::resource('admin/levels','LevelsController');
Route::resource('admin/users','UsersController');
Route::get('admin/modules/{id}/{question}','ModuleController@showQestion');
Route::get('admin/modules/{id}/{question}/delete','ModuleController@deleteQuestion');

Route::post('admin/modules/add-questions/{id}','ModuleController@addQuestions');
Route::get('/panel','DashboardController@index');
Route::get('/panel/daftar-materi/dari-saya','Parent\MaterialController@fromMe');
Route::get('/panel/daftar-materi/dari-orangtua','Parent\MaterialController@fromMe');
Route::resource('/panel/daftar-materi','Parent\MaterialController');
Route::resource('/panel/daftar-anak','KidsController');
Route::get('/panel/daftar-anak/{username}','Parent\KidsController@detail')->middleware('isVerify');
Route::get('/panel/daftar-anak/{username}/aktivitas','Parent\KidsController@activityKids')->middleware('isVerify');
Route::get('/panel/daftar-anak/{username}/nilai','Parent\KidsController@pointKids')->middleware('isVerify');

Route::resource('/panel/daftar-anak','Parent\KidsController');
Route::get('/panel/daftar-soal/dari-saya','Kids\QuestionsController@fromMe');


Route::get('/panel/daftar-soal/dari-orangtua','Kids\QuestionsController@fromMe')->middleware('isVerify');
Route::get('/panel/pengaturan','DashboardController@settings');
Route::post('/panel/pengaturan','DashboardController@changeProfile');
Route::post('/panel/pengaturan/verifikasi','DashboardController@verify');
Route::get('/panel/pengaturan/ulangi','DashboardController@reset');
Route::resource('/panel/daftar-soal','Kids\QuestionsController')->middleware('isVerify');
Route::get('panel/soal/{material}/{subject}','Kids\QuestionsController@detail')->middleware('isVerify');
Route::get('/panel/soal/{param}/detail/{id}','Parent\ModuleController@detailQuestion')->middleware('isVerify');
Route::get('/panel/soal/buat','Parent\ModuleController@create')->middleware('isVerify');
Route::post('/panel/soal/buat','Parent\ModuleController@store')->middleware('isVerify');
Route::post('/panel/soal/{param}/tambah','Parent\ModuleController@addQuestions')->middleware('isVerify');
Route::get('/panel/soal/{param}/hapus/{id}','Parent\ModuleController@delete')->middleware('isVerify');
Route::match(['get','delete'],'/panel/soal/{param}','Parent\ModuleController@detail')->middleware('isVerify');
Route::get('panel/daftar-materi/{material}/{subject}','Parent\MaterialController@detail');
Route::get('panel/soal/{material}/{subject}/mulai','Kids\QuestionsController@start');
Route::get('panel/nilai-saya','Kids\QuestionsController@myScore');
Route::get('dashboard/question/{material}/{subject}/json','Kids\QuestionsController@listQuestions');
Route::get('api/question/{id}','Kids\QuestionsController@getQuestionById');
Route::get('/panel/aktivitas-anak','DashboardController@kidsActivity')->middleware('isVerify');
Route::get('/panel/aktivitas-anak/{username}','DashboardController@activities');
Route::get('/berita','BeritaController@index');
Route::get('/berita/{id}','BeritaController@store');
// <<<<<<< HEAD
Route::post('/api/questions/end','Kids\QuestionsController@end');
// =======
Route::post('/api/questions/end','Kids\QuestionsController@end');
Route::get('/panel/profil','DashboardController@profile') ;
Route::get('panel/nilai','Parent\PointsController@index')->middleware('isVerify');
// >>>>>>> 4e9bff22f7106a396bd0ace05d2d501c867febc7
