<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\admin\DanhSachDatBanController;
use App\Http\Controllers\admin\datbananController;
use App\Http\Controllers\admin\khachordermonanController;
use App\Http\Controllers\admin\donhangmonanctController;
use App\Http\Controllers\admin\bananController;
use App\Http\Controllers\admin\doanhthuController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $viewData=[];
    $viewData["title"] = "Quan an ";
    return view('layouts.admin') -> with("viewData",$viewData);
 });
 Route::get('/addmonan', function () {
    $viewData=[];
    $viewData["title"] = "Quan an ";
    return view('admin.addmonan.index') -> with("viewData",$viewData);
 });

Route::get('/Datban', function () {
   $viewData=[];
   $viewData["title"] = "Quan an ";
   return view('admin.Datban.index') -> with("viewData",$viewData);
});
Route::get('/index', function () {
    $viewData=[];
    $viewData["title"] = "Quan an ";
    return view('home.index') -> with("viewData",$viewData);
 });

 Route::get('/editmenu', function () {
    $viewData=[];
    $viewData["title"] = "Quan an ";
    return view('admin.editmenu.index') -> with("viewData",$viewData);
 });
 Route::get('/menu', function () {
    $viewData=[];
    $viewData["title"] = "Quan an ";
    return view('admin.menu.index') -> with("viewData",$viewData);
 });

 Route::get('/admin/addmonan.index', function () {
    $viewData=[];
    $viewData["title"] = "Quan an ";
    return view('admin.addmonan.index') -> with("viewData",$viewData);
 });

 
 Route::get('/admin/editmenu.index', function () {
    $viewData=[];
    $viewData["title"] = "Quan an ";
    return view('admin.editmenu.index') -> with("viewData",$viewData);
 });


 Route::get('/form/menu.index', function () {
    $viewData=[];
    $viewData["title"] = "Quan an ";
    return view('admin.menu.index') -> with("viewData",$viewData);
 });

 Route::get('/update/order', [khachordermonanController::class, 'update'])->name('admin.update.order'); 
 Route::get('/data/order/table',[khachordermonanController::class,'tableOrder'])->name('get.data.table');


 /*
 Route::get('/admin',
 'App\Http\Controllers\Admin\AdminHomeController@index')
 ->name("admin.home.index");

 Route::get('admin', 'AdminController@index');
Route::get('menu', function () {
    return view('menu');
});*/
// Thêm, xóa, sửa món ăn
Route::prefix('admin')->group(function () {

  Route::get('/menu', [MenuController::class, 'index'])->name('admin.menu.index'); 
  Route::post('/addmonan', [MenuController::class, 'create'])->name('admin.menu.create');
  Route::delete('/menu/{id}/delete', [MenuController::class, 'delete'])->name('admin.menu.delete');

  Route::get('/addmonan', [MenuController::class, 'index1'])->name('admin.addmonan.index');


  Route::get('/editmenu/{id}/edit', [MenuController::class, 'edit']) ->name("admin.editmenu.index");
  Route::put('/menu/{id}/update', [MenuController::class, 'update'])->name("admin.menu.update");  
 
  
  Route::get('/dsdatban', [MenuController::class, 'indexdsdatban'])->name('admin.dsdatban.index');
Route::get('/datban', [datbananController::class, 'index'])->name('admin.datban.index');
Route::post('/datban', [datbananController::class, 'create'])->name('admin.datban.create');

//
Route::get('/order', [khachordermonanController::class, 'indexkhachordermon'])->name('admin.order.index'); 
Route::get('/hoadon', [donhangmonanctController::class, 'indexdonhangmonanct'])->name('admin.hoadonCT.index'); 
//
Route::get('/banan', [bananController::class, 'index'])->name('admin.banan.index');
Route::post('/banan', [bananController::class, 'create'])->name('admin.banan.create');
//
Route::get('/doanhthu', [doanhthuController::class, 'index'])->name('admin.thongke.index'); 
//
});



