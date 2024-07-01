<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Customer;
use App\Models\LoaiXe;
use App\Models\User;
use App\Models\Xemodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function getdangnhapadmin()
    {
       return view("admin/pages/dangnhap");
    }
    public function postdangnhapadmin(Request $req)
    {
        $validate = $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:3|max:20'
        ], [
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Bạn nhập sai định dạng email',
            'password.required' => 'Bạn chưa nhập password',
            'password.min' => 'Vui lòng nhập mật khẩu ít nhất 3 kí tự',
            'password.max' => 'Vui lòng nhập mật khẩu không quá 20 kí tự'
        ]);
        if(Auth::attempt(['email'=>$validate['email'],'password'=>$validate['password']])){
           if(Auth::user()->roles=="admin")
           {
            return redirect('admin');
           }
           else
           {
            return redirect('dang-nhap-admin')->with(['matb'=>'0','noidung'=>'Bạn không phải là admin']);
           }  
            }
            else{
                return redirect('dang-nhap-admin')->with(['matb'=>'0','noidung'=>'Đăng nhập thất bại']);
            }
    }
    public function getindex()
    {
        return view('admin/pages/dashboard');
    }
    public function danhsachsanpham()
    {
        $products=Xemodel::all();
        return view("admin/pages/products/index",compact("products"));
    }
    public function  customer()
    {
        $customers=Customer::all();
        return view("admin/pages/customers/index",compact("customers"));
    }
    public function  getusers()
    {
        $users=User::all();
        return view("admin/pages/users/index",compact("users"));
    }
    public function  getaddproduct()
    {
        $loaixe=LoaiXe::all();
        return view("admin/pages/products/add",compact("loaixe"));
    }
    
    public function postaddproduct(Request $request)
    {
        if ($request->hasFile('img')) {
            $file = $request->img;
            $ext = $request->img->extension();
            $file_name = time() . '-' . 'products.' . $ext;
            $file->move('../resources/frontend/assets', $file_name);
        }

        $car = new Xemodel();
        $car->ten_xe = $request->ten_xe;
        $car->id_loai = $request->id_loai;
        $car->don_gia = $request->don_gia;
        $car->giam_gia = $request->giam_gia;
        $car->vitri = $request->vitri;
        $car->chongoi = $request->chongoi;
        $car->img = $file_name;
        $car->mota = $request->mota;
        $car->save();
        // Chuyển hướng sau khi lưu thành công
        return redirect('danh-sach-xe')->with('success', 'Thêm xe thành công!');
    }
    public function  geteditproduct($id)
    {
        $car=Xemodel::find($id);
        $loaixe=LoaiXe::all();
        return view("admin/pages/products/edit",compact("car","loaixe"));
    }
    public function posteditproduct(Request $request,$id)
    {
        if ($request->hasFile('img')) {
            $file = $request->img;
            $ext = $request->img->extension();
            $file_name = time() . '-' . 'products.' . $ext;
            $file->move('../resources/frontend/assets', $file_name);
        }
        $car = Xemodel::find($id);
        $car->ten_xe = $request->ten_xe;
        $car->id_loai = $request->id_loai;
        $car->don_gia = $request->don_gia;
        $car->giam_gia = $request->giam_gia;
        $car->vitri = $request->vitri;
        $car->chongoi = $request->chongoi;
        $car->img = $file_name ?? $car->img ;
        $car->mota = $request->mota;
        $car->save();
        // Chuyển hướng sau khi lưu thành công
        return redirect('danh-sach-xe')->with('success', 'Sửa thành công!');
    }
    public function getxoasp($id)
    {
        $car = Xemodel::find($id);
        $car->delete();
        return redirect('danh-sach-xe')->with('success', 'Xóa xe thành công!');
    }
    public function getcomment()
    {
        $comments = Comment::all();      
        return view('admin/pages/binhluan/index',compact('comments'));
    }
    public function getxoabinhluan($id)
    {
        $comments = Comment::find($id);
        $comments->delete();
        return redirect()->back()->with('success', 'Xóa xe thành công!');
    }   
    public function getdangxuat()
    {
        Auth::logout();
        return redirect('dang-nhap-admin')->with('success', 'Bạn đã đăng xuất thành công!');
    }
}
