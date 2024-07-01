@extends("admin/layouts/index")
@section("content")
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Thêm xe/</span> 
        @if(isset($car)) Chỉnh sửa xe @else Thêm xe cho thuê @endif
    </h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">@if(isset($car)) Chỉnh sửa @else Thêm @endif</h5>
                    <small class="text-muted float-end">Nhập đầy đủ thông tin xe</small>
                </div>
                <div class="card-body">
                    <form action="sua-san-pham/{{$car->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label class="form-label" for="basic-default-fullname">Tên xe</label>
                                <input type="text" class="form-control" id="basic-default-fullname" placeholder="Nhập tên xe" name="ten_xe" value="{{ isset($car) ? $car->ten_xe : '' }}" />
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label class="form-label" for="basic-default-fullname">Đơn giá</label>
                                <input type="text" class="form-control" id="basic-default-fullname" placeholder="Đơn giá" name="don_gia" value="{{ isset($car) ? $car->don_gia : '' }}" />
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label class="form-label" for="basic-default-fullname">Giảm giá</label>
                                <input type="text" class="form-control" id="basic-default-fullname" placeholder="Giảm giá" name="giam_gia" value="{{ isset($car) ? $car->giam_gia : '' }}" />
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label class="form-label" for="basic-default-fullname">Vị trí</label>
                                <input type="text" class="form-control" id="basic-default-fullname" placeholder="Nhập vị trí" name="vitri" value="{{ isset($car) ? $car->vitri : '' }}" />
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label class="form-label" for="basic-default-fullname">Chỗ ngồi</label>
                                <input type="text" class="form-control" id="basic-default-fullname" placeholder="Chỗ ngồi" name="chongoi" value="{{ isset($car) ? $car->chongoi : '' }}" />
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label class="form-label" for="basic-default-fullname">Hình ảnh</label>
                                <input type="file" class="form-control" id="basic-default-fullname" placeholder="Hình ảnh" name="img" />
                                @if(isset($car) && $car->img)
                                    <img src="../resources/frontend/assets/{{$car->img}}" alt="Car Image" width="100">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="product-options">Loại sản phẩm</label>
                                <select class="form-control" id="product-options" name="id_loai">
                                    @foreach ($loaixe as $lx)
                                        <option value="{{$lx->id}}" @if(isset($car) && $car->id_loai == $lx->id) selected @endif>{{$lx->ten_loai}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Mô tả</label>
                                <input type="text" class="form-control" id="basic-default-fullname" placeholder="Mô tả" name="mota" value="{{ isset($car) ? $car->mota : '' }}" />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">@if(isset($car)) Cập nhật @else Thêm @endif</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->
@endsection
