@extends("admin/layouts/index")
@section("content")
<div class="container mt-3">
    <!-- Alert Section -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Rest of your content -->
</div>
 <!-- Content -->
 <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản trị/</span>Danh sách</h4>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Danh sách bình luận</h5>
                <div class="table-responsive text-nowrap">
    <table class="table">
        <thead>
            <tr>
                <th>Tên xe</th>
                <th>Khách hàng</th>
                <th>Nội dung</th>
                <th>Ngày đăng</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($comments as $comment)
            <tr>
                <td>{{$comment->car->ten_xe}}</td>
                <td>{{$comment->users->name}}</td>
                <td>{{$comment->noi_dung}}</td>
                <td>{{$comment->ngay}}</td>
                <td><a href="xoa-binh-luan/{{$comment->id}}"><button class="btn btn-primary">Xóa</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

              </div>  
</div>
<!-- / Content -->
@endsection