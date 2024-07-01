<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Customer;
use App\Models\User;
use App\Models\Xemodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FrontendCotroller extends Controller
{
    //
    public function gethome()
    {
        $products=Xemodel::all();
        return view('frontend/pages/trangchu',compact('products'));
    }
    public function getchitiet($id)
    {
        $product=Xemodel::find($id);
        $comment= Comment::where('id_xe',$id)->get();
        return view('frontend/pages/chitiet',compact('product','comment'));
    }
    public function getdangnhap()
   {
    return view('frontend/pages/dangnhap');
   }
   
   public function postdangnhap(Request $req)
   {    
        $email= User::where('email', $req->emaillg)->first();
            if($email)
            { 
                    $chungthuc=array('email'=>$req->emaillg,'password'=>$req->passwordlg);
                    if(Auth::attempt($chungthuc))
                    {
                        return redirect('trangchu')->with([
                            'alert_type' => 'success',
                            'alert_message' => 'Đăng nhập thành công'
                        ]);
                    }
                    else
                    {
                        return redirect("dang-nhap")->with([
                            'alert_type' => 'error',
                            'alert_message' => 'Email hoặc mật khẩu chưa đúng'
                        ]);
                    }
            }
            else
            {
                return redirect("dang-nhap")->with([
                    'alert_type' => 'error',
                    'alert_message' => 'Email hoặc mật khẩu chưa đúng'
                ]);
            }
      
   }



   public function getdangki()
   {
    return view('frontend/pages/dangki');
   }
  //send code
   public function postdangki(Request $req)
   {
    $emailUser = User::where('email', $req->email)->exists();
        if($emailUser)
        {
            return redirect("dang-ki")->with([
                'alert_type' => 'error',
                'alert_message' => 'Email đã được đăng kí'
            ]);
        }
        else
        {
            try {
                $user = new User;
                $user->name = $req->name;
                $user->email = $req->email;
                $user->sodienthoai = isset($req->phone) ? $req->phone : 'chưa có';
                $user->diachi = isset($req->address) ? $req->address : 'chuaco';
                $user->password = Hash::make($req->password);
                $user->save();
                return redirect("dang-nhap");
            } catch (\Exception $e) {
                // Xử lý lỗi ở đây, ví dụ:
                // echo '<script> alert("Có lỗi xảy ra: ' . $e->getMessage() . '");</script>';
                return redirect("dang-ki")->with([
                    'alert_type' => 'error',
                    'alert_message' => 'Lỗi'
                ]);
            }
        }
  
    
   }
   public function getgioithieu(Request $req)
   {
    return view('frontend/pages/about');
   }
   public function  getdonhang(Request $req)
   {
        if(Auth::check())
        {
            $id=Auth::user()->id;
            $customers=Customer::where('iduser',$id)->get();
            return view('frontend/pages/thongtin',compact('customers'));
        }
        else
        {
            return view('frontend/pages/thongtin');
        }
        
   }
   public function  getdichvu(Request $req)
   {
    return view('frontend/pages/dichvu');
   }
   public function datxe(Request $request)
   {
    $request->validate([
        'id' => 'required|integer',
        'ngay_thue_xe' => 'required|date',
        'so_gio' => 'required|integer',
        'vi_tri' => 'required|string',
    ]);
    if(Auth::check()){
        $iduser=Auth::user()->id;
        $idproduct = $request->input('id');
        $car=Xemodel::find($idproduct);
        $data = [
            'id' => $iduser,
            'ngay_thue_xe' => $request->input('ngay_thue_xe'),
            'so_gio' => $request->input('so_gio'),
            'vi_tri' => $request->input('vi_tri') === 'new' ? $request->input('vitrimoitext') : 'Địa chỉ mặc định'
        ];

        $carRentalData = session('car_rental_data', []);
        $carRentalData[$iduser] = $data;
        session(['car_rental_data' => $carRentalData]);
        return view('frontend/pages/donhang',compact('carRentalData','car'));
    }
    else
    {
     return redirect('dang-ki');
    }
        
    
   }
   public function thongtinkhachhang(Request $request)
   {
    // Retrieve validated data
    $id = $request['id'];
    $iduser = $request['iduser'];
    $hoTen = $request['ho_ten'];
    $email = $request['email'];
    $sdt = $request['sdt'];
    $ngayThue = $request['ngaythue'];
    $soGio = $request['sogio'];
    $viTri = $request['vitri'];
    $donGia = $request['dongia'];
    $tienDatCoc = $request['tiendatcoc'];
    $tongTien = $request['tongtien'];

    // Process data (store in database, etc.)
    // Assuming you have a model CustomerInfo to save the data
    $customerInfo = new Customer();
    $customerInfo->idsp = $id;
    $customerInfo->iduser = $iduser;
    $customerInfo->ho_ten = $hoTen;
    $customerInfo->email = $email;
    $customerInfo->sdt = $sdt;
    $customerInfo->ngaythue = $ngayThue;
    $customerInfo->sogio = $soGio;
    $customerInfo->vitri = $viTri;
    $customerInfo->dongia = $donGia;
    $customerInfo->tiendatcoc = $tienDatCoc;
    $customerInfo->tongtien = $tongTien;
    $customerInfo->save();
    return redirect('trangchu')->with('success', 'Bạn đã đặt xe thành công');
   }
   public function getbinhluan(Request $request)
   {
    $idkh = $request['idkh'];
    $idxe = $request['idxe'];
    $noidung = $request['comment'];
    $ngay=date('d-m-Y');
    $binhluan = new Comment();
    $binhluan->id_xe=$idxe;
    $binhluan->id_kh=$idkh;
    $binhluan->noi_dung=$noidung;
    $binhluan->ngay=$ngay;
    $binhluan->save();
    return redirect()->back()->with('success', 'Thông tin thuê xe đã được lưu thành công.');
}

}