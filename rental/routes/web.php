<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendCotroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/test', function () {
    return view('admin/pages/products/add');
});
Route::get("dang-nhap",[FrontendCotroller::class, 'getdangnhap'])->name('dangnhap');

Route::middleware(['frontend'])->group(function () {
Route::post("dang-nhap",[FrontendCotroller::class, 'postdangnhap']);
});
Route::get("dang-ki",[FrontendCotroller::class, 'getdangki'])->name('dangki');
Route::post("dang-ki",[FrontendCotroller::class, 'postdangki']);

Route::get('/', [FrontendCotroller::class, 'gethome'])->name('trangchu');
Route::get('/trangchu', [FrontendCotroller::class, 'gethome'])->name('trangchu');
Route::get('gioithieu', [FrontendCotroller::class, 'getgioithieu']);
Route::get('/chitietsanpham/{id}', [FrontendCotroller::class, 'getchitiet'])->name('trangchu');
Route::get("don-hang",[FrontendCotroller::class, 'getdonhang']);
Route::get("dich-vu",[FrontendCotroller::class, 'getdichvu']);
Route::get("dat-xe",[FrontendCotroller::class, 'datxe']);
Route::post("dat-xe",[FrontendCotroller::class, 'thongtinkhachhang']);
Route::get("binh-luan",[FrontendCotroller::class, 'getbinhluan']);


Route::get('dang-nhap-admin',[AdminController::class,'getdangnhapadmin'])->name('dangnhapadmin');
Route::get('dang-xuat',[AdminController::class,'getdangxuat'])->name('dangxuatadmin');
Route::post('dang-nhap-admin',[AdminController::class,'postdangnhapadmin']);



Route::middleware(['admin'])->group(function () {
    Route::get('admin', [AdminController::class, 'getindex']);
    Route::get('danh-sach-xe', [AdminController::class, 'danhsachsanpham']);
    Route::get('khach-hang', [AdminController::class, 'customer']);
    Route::get('tai-khoan', [AdminController::class, 'getusers']);
    Route::get('them-san-pham', [AdminController::class, 'getaddproduct']);
    Route::post('them-san-pham', [AdminController::class, 'postaddproduct']);
    Route::get('sua-san-pham/{id}', [AdminController::class, 'geteditproduct']);
    Route::post('sua-san-pham/{id}', [AdminController::class, 'posteditproduct']);
    Route::get('xoa-san-pham/{id}', [AdminController::class, 'getxoasp']);
    Route::get('quan-li-binh-luan', [AdminController::class, 'getcomment']);
    Route::get('xoa-binh-luan/{id}', [AdminController::class, 'getxoabinhluan']);
});
