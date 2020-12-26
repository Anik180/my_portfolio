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
    return view('frontend.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/logout', 'HomeController@logout')->name('admin.logout');

//about
Route::get('/update/about', 'AboutController@Updateabout')->name('update.about');

Route::post('/update/now{id}', 'AboutController@Update')->name('update.now');
Route::get('/update/main', 'AboutController@Updatemain')->name('update.main');
Route::post('/update/mains{id}', 'AboutController@main')->name('update.mains');
//skill
Route::get('/skill', 'SkillController@skill')->name('skill');
Route::post('/store/skill', 'SkillController@skillstore')->name('store.skill');
Route::get('delete/skill{id}', 'SkillController@delete')->name('delete.skill');
Route::get('edit/skill{id}', 'SkillController@edit')->name('edit.skill');
Route::post('update/skill{id}', 'SkillController@update')->name('update.skill');

//skillbar
Route::get('/skill/bar', 'ShillbarController@skillbar')->name('skill.bar');
Route::post('/store/skillbar', 'ShillbarController@store')->name('store.skillbar');
Route::get('/delete/bar{id}', 'ShillbarController@delete')->name('delete.bar');
Route::get('/edit/bar{id}', 'ShillbarController@edit')->name('edit.bar');
Route::post('/up/skillBar{id}', 'ShillbarController@skillupdate')->name('up.skillBar');

//education
Route::get('/my/work', 'WorkController@mywork')->name('my.work');
Route::post('/store/work', 'WorkController@store')->name('store.work');
Route::get('/delete/work{id}', 'WorkController@delete')->name('delete.work');
Route::get('/edit/work{id}', 'WorkController@edit')->name('edit.work');
Route::post('/udate/work{id}', 'WorkController@update')->name('udate.work');
//training
Route::get('/training', 'TrainingController@training')->name('training');
Route::post('/store/training', 'TrainingController@store')->name('store.training');
Route::get('/delete/training{id}', 'TrainingController@delete')->name('delete.training');
Route::get('/edit/training{id}', 'TrainingController@edit')->name('edit.training');
Route::post('/up/training{id}', 'TrainingController@trainingupdate')->name('up.training');
Route::post('/store/msg', 'ContactController@store')->name('store.msg');
// cv
Route::get('/cv/upload', 'TrainingController@cv')->name('cv.upload');
Route::post('/store/cv', 'TrainingController@cvstore')->name('store.cv');
Route::get('/cv/download{cv}', 'TrainingController@cvdownload')->name('cv.download');