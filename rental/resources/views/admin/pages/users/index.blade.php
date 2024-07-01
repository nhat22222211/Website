@extends("admin/layouts/index")
@section("content")
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
                <th>Tên</th>
                <th>Email</th>
                <th>Sdt</th>
                <th>Địa chỉ</th>
                <th>Vai trò</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->sodienthoai}}</td>
                <td>{{$user->diachi}}</td>
                <td>{{$user->roles=="admin"? "admin":"user" }}</td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Sửa</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Xóa</a>
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