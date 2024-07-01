@extends("frontend/layouts/index")
@section('content')
<div class="contaner-fluid  mt-4" style="background-color: rgb(248, 248, 252);">
   <div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <div class="row mt-4">
            <div class="col-lg-7 m-2 shadow-lg rounded " style="background-color: rgb(255, 255, 255); box-shadow:none !important;">
                <div class="row">
                <div class="container">
                    <img src="../resources/frontend/assets/{{$product->img}}" class="img-fluid">
                    <h2 class="mt-2">{{$product->ten_xe}}</h2>
                    <p>Địa điểm :{{$product->vitri}}</p>
                    <hr>
                    <h4 class="mt-2">Đặc điểm</h4>
                    <span class="icon-text-container">
                        <svg fill="rgb(36, 242, 125)" xmlns="http://www.w3.org/2000/svg" style="margin-left:20px" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                        </svg>
                        <p>{{$product->chongoi}} chỗ</p>
                        <svg fill="rgb(36, 242, 125)" xmlns="http://www.w3.org/2000/svg" style="margin-left:20px ;" width="20" height="20" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
                        </svg>
                        <p>{{$product->id_loai==1 ? "Số tự đông" : "Số sàn"}}</p>
                        <svg fill="rgb(36, 242, 125)" class="float-end" xmlns="http://www.w3.org/2000/svg" style="margin-left:20px;"width="20" height="20" fill="currentColor" class="bi bi-fuel-pump-fill" viewBox="0 0 16 16">
                        <path d="M1 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v8a2 2 0 0 1 2 2v.5a.5.5 0 0 0 1 0V8h-.5a.5.5 0 0 1-.5-.5V4.375a.5.5 0 0 1 .5-.5h1.495c-.011-.476-.053-.894-.201-1.222a.97.97 0 0 0-.394-.458c-.184-.11-.464-.195-.9-.195a.5.5 0 0 1 0-1q.846-.002 1.412.336c.383.228.634.551.794.907.295.655.294 1.465.294 2.081V7.5a.5.5 0 0 1-.5.5H15v4.5a1.5 1.5 0 0 1-3 0V12a1 1 0 0 0-1-1v4h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1zm2.5 0a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5z"/>
                      </svg>
                        <p>Xăng</p>
                        </span>
                        <h4 clas="mt-2">Mô tả</h4>
                        <p>{{$product->mota}}</p>
                        <h4>Điều khoản</h4>
                        <p>
                            Quy định khác:<br>

                            - Sử dụng xe đúng mục đích.<br>

                            - Không sử dụng xe thuê vào mục đích phi pháp, trái pháp luật.<br>

                            - Không sử dụng xe thuê để cầm cố, thế chấp.<br>

                            - Không hút thuốc, nhả kẹo cao su, xả rác trong xe.<br>

                            - Không chở hàng quốc cấm dễ cháy nổ.<br>

                            - Không chở hoa quả, thực phẩm nặng mùi trong xe.<br>

                            - Khi trả xe, nếu xe bẩn hoặc có mùi trong xe, khách hàng vui lòng vệ sinh xe sạch sẽ hoặc gửi phụ thu phí vệ sinh xe.<br>

                            Trân trọng cảm ơn, chúc quý khách hàng có những chuyến đi tuyệt vời !
                        </p>
                    </div>
                </div>    
            </div>    
            <div class="col-lg-4  m-2" >
            <form action="dat-xe" method="get">
                @csrf
            <div class="row shadow-lg rounded" style="background-color: rgb(255, 255, 255); box-shadow:none !important;">
               <h4>Chính sách thuê xe</h4>
               <input type="hidden" value="{{$product->id}}" name="id">
               <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ngày thuê xe</label>
                <input type="date" name="ngay_thue_xe" class="form-control">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Số giờ</label>
                <input type="number" class="form-control" name="so_gio" placeholder="Số giờ">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Vị trí</label><br>
                &nbsp;Mặc định &nbsp;<input type="radio" name="vi_tri" id="offinput">
                &nbsp;Vị trí mới &nbsp;<input type="radio" name="vi_tri" value="new" id="oninput">
                <input  type="hidden" class="mt-2 form-control" id="vitrmoi" name="vitrimoitext" placeholder="Nhập vị trí nhận xe của bạn">
                </div>
                <div class="mt-2" style="display: flex; justify-content: space-between; align-items: center;">
                    <h6>Phí thuê xe</h6>
                    <span style="display: flex; flex-direction: column; align-items: flex-end;">
                        <p style="margin: 0;color: rgb(7);">{{$product->don_gia}}/giờ</p>
                    </span>
                </div>
                <div class="mt-2" style="display: flex; justify-content: space-between; align-items: center;">
                    <h6>Tiền cọc xe </h6>
                    <span style="display: flex; flex-direction: column; align-items: flex-end;">
                        <p style="margin: 0;color: rgb(7);">500.000</p>
                    </span>
                </div>

                <small class="mt-2">Tiền giữ chỗ sẽ không được hoàn lại nếu huỷ chuyến. Tiền giữ chỗ sẽ được hoàn lại sau khi trả xe.</small>
                <div class="oder mt-2">
                @if(Auth::check())
                    <button class="btn btn-primary w-100" type="submit" >Đặt xe ngay nào</button>
                </div>
                @else
                 <a href="dang-nhap" class="w-100 mt-2">Đăng nhập để thuê xe</a>
                @endif
            </div>
            </form>
            </div>
        </div>
        <div class="row mt-2">
        <div class="col-lg-12 m-2">
            <h2 style="text-align: center;">Đánh giá của khách hàng</h2>
            <p>Tổng số bình luận : 5 | Đánh giá : 4.6
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" style="opacity: 0.5;" class="bi bi-star-fill" viewBox="0 0 16 16">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>
            </p>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    @foreach($comment as $cmt )
                    <div class="row align-items-center mt-2">
                      
                            <div class="col-lg-1">
                                <img src="../resources/frontend/assets/mg5.jpg" class="img-fluid rounded-circle mt-2" style="max-width: 100px;border-radius: 50%;overflow: hidden;">
                            </div>
                            <div class="col-lg-10">
                                <p class="mb-0">{{$cmt->users->name}}</p>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </p>
                                    <p>{{$cmt->noi_dung}}</p>
                            </div>
                          
                        </div>
                        @endforeach
                        <div class="row mt-5">
                            @if(Auth::check())
                            <form action="binh-luan" method="get">
                                @if(Auth::check())
                                <input type="hidden" value="{{Auth::user()->id}}" name="idkh">
                                <input type="hidden" value="{{$product->id}}" name="idxe">
                                @endif
                                <div class="col-lg-12">
                                    <input type="text" name="comment" placeholder="Thêm bình luận của bạn" style="width: 100%; height: 100px; border: 1px solid black; border-radius: 8px; text-align: center;">
                                </div>
                                <div class="col-lg-12 d-flex justify-content-end mt-2">
                                    <button type="submit" class="btn btn-primary" style="width:200px; height:50px;background-color: blue;">Thêm bình luận</button>
                                </div>
                            </form>
                           @else
                           <a href="dang-nhap">Đăng nhập để bình luận</a>
                           @endif
                    </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    
    </div>

    </div>
    <div class="col-lg-1"></div> 
   </div>
   <script>
        // Function to show or hide the hidden input
        function toggleHiddenInput() {
            var onInput = document.getElementById('oninput');
            var hiddenInput = document.getElementById('vitrmoi');

            if (onInput.checked) {
                hiddenInput.type = 'text'; // Show the hidden input
            } else {
                hiddenInput.type = 'hidden'; // Hide the hidden input
            }
        }

        // Get radio buttons
        var onInput = document.getElementById('oninput');
        var offInput = document.getElementById('offinput');

        // Add event listeners to radio buttons
        onInput.addEventListener('change', toggleHiddenInput);
        offInput.addEventListener('change', toggleHiddenInput);
        
        // Call the function initially to set the correct state
        toggleHiddenInput();
    </script>
@endsection