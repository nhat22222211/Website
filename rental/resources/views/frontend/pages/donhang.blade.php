<!DOCTYPE html>
<html>
<head>
	<title>Invoice Template UI Design</title>
  <style>
@import url("https://fonts.googleapis.com/css2?family=Redressed&family=Ubuntu:wght@400;700&display=swap");

:root {
  --bg-clr: #88379d;
  --white: #fff;
  --invoice-bg: #e7e7ff;
  --primary-clr: #2f2929;
  --secondary-clr: #88379d;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Ubuntu", sans-serif;
}

body {
  background: var(--bg-clr);
  font-size: 12px;
  line-height: 20px;
  color: var(--primary-clr);
  padding: 0 20px;
}

.main_title{
  font-weight: 700;
  font-size: 16px;
  text-transform: uppercase;
  color: var(--secondary-clr);
  margin-bottom: 10px;
}

.p_title {
  font-weight: 700;
  font-size: 14px;
}

.p_title > span{
  font-weight: 400;
  font-size: 12px;
}

.text_right {
  text-align: right;
}

.text_center {
  text-align: center;
}

.i_row{
  display: flex;
}

.invoice {
  width: 800px;
  max-width: 100%;
  height: auto;
  background: var(--white);
  margin: 20px auto;
}

.invoice > div{
  width: 100%;
  padding: 40px;
}

.invoice .invoice_info .i_row{
  justify-content: space-between;
}

.invoice .invoice_info,
.invoice .invoice_terms{
  background: var(--invoice-bg);
}

.invoice .invoice_info > div:not(:last-child){
  margin-bottom: 40px;
} 

.invoice .invoice_info h1{
  font-size: 38px;
  line-height: 44px;
  color: var(--secondary-clr);
}

.invoice .w_15 {
  width: 15%;
}

.invoice .w_50 {
  width: 50%;
}

.invoice .w_55 {
  width: 55%;
}

.invoice .i_table .i_row {
  padding: 12px 10px; 
  border-bottom: 1px solid var(--invoice-bg);  
}

.invoice .i_table .i_row p{
  margin: 0;
  font-weight: 700;
}

.invoice .i_table .i_table_head .i_row,
.invoice .i_table .i_table_foot .grand_total_wrap{
  background: var(--invoice-bg);
  border: 0;
}

.invoice .invoice_right .terms{
  margin: 0;
}

  </style>
  
</head>
<body>
<section>
  <div class="invoice">
    <div class="invoice_info">
      <div class="i_row">
        <div class="title">
          <h1 class="text-align:center">Hóa đơn đặt xe</h1>
        </div>
      </div>
      <div class="i_row">

        <div class="i_to">
          <div class="main_title">
            <p>HÓA ĐƠN ĐẾN</p>
          </div>
          <div class="p_title">
            <p>{{Auth::user()->name}}</p>
            <span>Sdt : {{Auth::user()->sodienthoai}}</span>
          </div>
          <div class="p_title">
          <span>Email : {{Auth::user()->email}}</span><br>
          <span>Địa chỉ : {{  $carRentalData[Auth::user()->id]['vi_tri']=='Địa chỉ mặc định' ? Auth::user()->diachi :$carRentalData[Auth::user()->id]['vi_tri']}}</span>
          </div>
        </div>
        <div class="i_details text_right">
          <div class="main_title">
            <p>CHI TIẾT HÓA ĐƠN</p>
          </div>
          <div class="p_title">
            <p>Số hoá đơn:</p>
            <span>{{Auth::user()->id}}</span>
          </div>
          <div class="p_title">
            <p>Ngày đặt:</p>
            <span>{{date('d-m-Y')}}</span>
          </div>
        </div>
      </div>
      <div class="i_row">
        <div class="i_payment">
          <div class="main_title">
            <p>PHƯƠNG THỨC THANH TOÁN</p>
          </div>
          <div class="p_title">
            <p>Thanh toán tiền mặt</p>
          </div>
        </div>
        <div class="i_duetotal text_right">
          <div class="main_title">
            <p>Số giờ thuê</p>
          </div>
          <div class="p_title">
            <p>{{$carRentalData[Auth::user()->id]['so_gio']}} giờ</p>
          </div>
        </div>
      </div>
    </div>
    <div class="invoice_table">
      <div class="i_table">
        <div class="i_table_head">
          <div class="i_row">
            <div class="i_col w_55">
              <p class="p_title">Mô tả</p>
            </div>
            <div class="i_col w_15 text_center">
              <p class="p_title">Số giờ</p>
            </div>
            <div class="i_col w_15 text_center">
              <p class="p_title">Giá</p>
            </div>
            <div class="i_col w_15 text_right">
              <p class="p_title">Tổng tiền</p>
            </div>
          </div>
        </div>
        <div class="i_table_body">
          <div class="i_row">
            <div class="i_col w_55">
              <p>{{$car->ten_xe}}</p>
              <span>{{$car->mota}}</span>
            </div>
            <div class="i_col w_15 text_center">
              <p>{{$carRentalData[Auth::user()->id]['so_gio']}}</p>
            </div>
            <div class="i_col w_15 text_center">
              <p>{{number_format($car->giam_gia,0, ',', '.')}} đ</p>
            </div>
            <div class="i_col w_15 text_right">
              <p>{{number_format($carRentalData[Auth::user()->id]['so_gio']*$car->giam_gia,0, ',', '.')}} đ</p>
            </div>
          </div>
        </div>
        <div class="i_table_foot">
          <div class="i_row">
            <div class="i_col w_50">
              <p>Tiền thuê</p>
              <p>Tiền cọc</p>
            </div>
            <div class="i_col w_50 text_right">
              <p>{{number_format($carRentalData[Auth::user()->id]['so_gio']*$car->giam_gia,0, ',', '.')}} đ</p>
              <p>6.000.000 đ</p>
            </div>
          </div>
          <div class="i_row grand_total_wrap">
            <div class="i_col w_50">
              <p>Tổng tiền:</p>
            </div>
            <div class="i_col w_50 text_right">
            <p>{{number_format(($carRentalData[Auth::user()->id]['so_gio']*$car->giam_gia)+6000000,0, ',', '.')}} đ</p>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="invoice_terms">
      <div class="main_title">
        <form action="dat-xe" method="post">
          @csrf
         <input type="hidden" name="id" value="{{$car->id}}">
         <input type="hidden" name="iduser" value="{{Auth::user()->id}}">
         <input type="hidden" name="ho_ten" value="{{Auth::user()->name}}">
         <input type="hidden" name="email" value="{{Auth::user()->email}}">
         <input type="hidden" name="sdt" value="{{Auth::user()->sodienthoai}}">
         <input type="hidden" name="ngaythue" value="{{$carRentalData[Auth::user()->id]['ngay_thue_xe']}}" >
         <input type="hidden" name="sogio" value="{{$carRentalData[Auth::user()->id]['so_gio']}}">
         <input type="hidden" name="vitri" value="{{$carRentalData[Auth::user()->id]['vi_tri']=='Địa chỉ mặc định' ? Auth::user()->diachi :$carRentalData[Auth::user()->id]['vi_tri']}}">
         <input type="hidden" name="dongia" value="{{$car->giam_gia}}">
         <input type="hidden" name="tiendatcoc" value="6000000">
         <input type="hidden" name="tongtien" value="{{($carRentalData[Auth::user()->id]['so_gio']*$car->giam_gia)+6000000}}">   
       <button class="btn btn-primary"  onclick="confirmAndSubmit()" type="submit" style="width: 100px;height: 50px;border: none; float: right;">Thuê xe</button>
       </form>
      </div>
      <a href="trangchu">Trở lại</a>
    </div>
  </div>
</section>
<script>
    function confirmAndSubmit() {
        if (confirm("Đặt xe thành công")) {
            document.getElementById("thuexeForm").submit();
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>