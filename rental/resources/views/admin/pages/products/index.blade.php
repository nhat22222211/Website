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
                <h5 class="card-header">Danh sách xe cho thuê</h5>
                <div class="table-responsive text-nowrap">
    <table class="table">
        <thead>
            <tr>
                <th>Tên xe</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Hình ảnh</th>
                <th>Vị trí</th> 
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($products as $product)
            <tr>
                <td>{{$product->ten_xe}}</td>
                <td>{{ \Illuminate\Support\Str::limit($product->mota, 50) }}</td>
                <td>{{$product->giam_gia}}</td>
                <td><img src="../resources/frontend/assets/{{$product->img}}" alt="{{$product->ten_xe}}" style="width:100px;height:100px;"></td>
                <td>{{$product->vitri}}</td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="sua-san-pham/{{$product->id}}"><i class="bx bx-edit-alt me-1"></i> Sửa</a>
                            <a class="dropdown-item" href="xoa-san-pham/{{$product->id}}"><i class="bx bx-trash me-1"></i> Xóa</a>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

              </div>  
</div>
<!-- / Content -->
@endsection