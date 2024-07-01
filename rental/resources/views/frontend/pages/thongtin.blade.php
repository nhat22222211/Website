@extends("frontend/layouts/index")
@section('content')
<div class="container mt-2 shadow-lg rounded">
    <h2>Thông tin đơn hàng</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Số thứ tự</th>
      <th scope="col">Tên xe</th>
      <th scope="col">Email</th>
      <th scope="col">Số giờ thuê</th>
      <th scope="col">Tổng tiền</th>
      <th scope="col">Ngày đặt</th>
      <th scope="col">Hình ảnh</th>
    </tr>
  </thead>
  <tbody>
  @if(Auth::check())
      @foreach ($customers as $cus )
    <tr>
      <th scope="row">{{$cus->id}}</th>
      <td>{{$cus->car->ten_xe}}</td>
      <td>{{$cus->email}}</td>
      <td>{{$cus->sogio}}</td>
      <td>{{$cus->tongtien}}</td>
      <td>{{$cus->ngaythue}}</td>
      <td><img src="../resources/frontend/assets/{{$cus->car->img}}" alt="{{$cus->car->img}}" style="width:100px;height:100px;"></td>
    </tr>
    @endforeach
    @else
    <tr><td>Bạn chưa có đơn hàng nào</td></tr>
    @endif
  </tbody>
</table>
</div>
@endsection