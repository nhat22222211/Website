@extends("frontend/layouts/index")
@section('content')
 
<section class="banner__container">
      <div class="banner__card">
        <h4>Đảm bảo sự hài lòng sẽ không có lại vết lõm.</h4>
      </div>
      <div class="banner__card">
        <h4>Chăm sóc xe theo cách bạn muốn.</h4>
      </div>
      <div class="banner__image">
        <img src="../resources/frontend/assets/banner.jpg" alt="banner" />
      </div>
    </section>

    <section class="section__container experience__container" id="about">
      <div class="experience__image">
        <img src="../resources/frontend/assets/experience.jpg" alt="experience" />
      </div>
      <div class="experience__content">
        <p class="section__subheader">CHÚNG TA LÀ AI</p>
        <h2 class="section__header">
        Chúng tôi có 25 năm kinh nghiệm trong lĩnh vực này
        </h2>
        <p class="section__description">
        Với bề dày lịch sử kéo dài 25 năm, cam kết của chúng tôi về
         sự xuất sắc trong lĩnh vực dịch vụ ô tô là không thể lay chuyển. 
          Đội ngũ dày dặn kinh nghiệm của chúng tôi có nhiều kinh nghiệm để đảm
           bảo xe của bạn nhận được sự chăm sóc tốt nhất. Hãy tin tưởng vào chuyên
            môn của chúng tôi để giúp xe của bạn vận hành êm ái và an toàn.
        </p>
        <button class="btn">Đọc thêm</button>
      </div>
    </section>

    <section class="service" id="service">
      <div class="section__container service__container">
        <p class="section__subheader">TẠI SAO CHỌN CHÚNG TÔI</p>
        <h2 class="section__header">Dịch vụ xe tuyệt vời</h2>
        <p class="section__description">
        Hãy tin tưởng chúng tôi sẽ giúp ô tô của bạn vận hành êm ái và đáng tin cậy.
        </p>
        <div class="service__grid">
          <div class="service__card">
            <img src="../resources/frontend/assets/service-1.jpg" alt="service" />
            <h4>Bánh xe căn chỉnh</h4>
            <p>
            Trải nghiệm những chuyến đi êm ái hơn và kéo dài tuổi thọ của lốp với dịch vụ căn chỉnh bánh xe của chúng tôi.
            </p>
          </div>
          <div class="service__card">
            <img src="../resources/frontend/assets/service-2.jpg" alt="service" />
            <h4>Hệ thống điện</h4>
            <p>
            Nâng cao hệ thống điện của ô tô lên hiệu suất cao nhất bằng chuyên môn chuyên môn của chúng tôi.
            </p>
          </div>
          <div class="service__card">
            <img src="../resources/frontend/assets/service-3.jpg" alt="service" />
            <h4>Dịch vụ hệ thống</h4>
            <p>
             Chúng tôi sử dụng các kỹ thuật và chẩn đoán tiên tiến để đảm bảo tình trạng tối ưu.
            </p>
          </div>
          <div class="service__card">
            <img src="../resources/frontend/assets/service-4.jpg" alt="service" />
            <h4>Chẩn đoán động cơ</h4>
            <p>
            Mở khóa bí mật về khả năng vận hành của ô tô bằng các dịch vụ chẩn đoán hiện đại.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="customisation">
      <div class="section__container customisation__container">
        <p class="section__subheader">TÙY CHỈNH CỦA CHÚNG TÔI</p>
        <h2 class="section__header">
        Phục vụ xe phù hợp với tay nghề tuyệt vời
        </h2>
        <p class="section__description">
        Đội ngũ kỹ thuật viên và thợ cơ khí lành nghề tận tâm của chúng tôi tự hào cung cấp dịch vụ hàng đầu cho chiếc xe yêu quý của bạn.
        </p>
        <div class="customisation__grid">
          <div class="customisation__card">
            <h4>65</h4>
            <p>Tổng số dự án</p>
          </div>
          <div class="customisation__card">
            <h4>165</h4>
            <p>Minh bạch</p>
          </div>
          <div class="customisation__card">
            <h4>463</h4>
            <p>Dự án đã thực hiện</p>
          </div>
          <div class="customisation__card">
            <h4>5063</h4>
            <p>Có giải thưởng</p>
          </div>
        </div>
      </div>
    </section>
   
    <section class="section__container price__container" id="price">
      <p class="section__subheader">GÓI TỐT NHẤT</p>
      <h2 class="section__header">Kế hoạch định giá của chúng tôi</h2>
      <p class="section__description">
      Chúng tôi cung cấp nhiều lựa chọn giá cả phải chăng và linh hoạt.
      </p> 
    
      <div class="price__grid">
      @foreach($products as $product )
        <div class="price__card">
          <div class="price__card__ribbon">Giảm giá</div>
         <a href="chitietsanpham/{{$product->id}}"><img src="../resources/frontend/assets/{{$product->img}}" alt="" class="img-fluid"></a>
           <div class="description" style="text-align: start;">
           <h4 class="mt-2">{{$product->ten_xe}}</h4>
          <small style="color:rgb(165, 164, 164)">{{$product->vitri}}</small><br>
           <span style="display: flex; flex-direction: column;">
            <small style="text-decoration: line-through; color: rgb(165, 164, 164);">{{$product->don_gia}}</small>
            <p style="margin: 0;color:rgb(7)">{{$product->giam_gia}}/giờ</p>
        </span>
        <hr>
        <span class="icon-text-container">
        <svg xmlns="http://www.w3.org/2000/svg" style="margin-left:20px" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
        </svg>
        <p>{{$product->chongoi}} chỗ</p>
        <svg xmlns="http://www.w3.org/2000/svg" style="margin-left:20px ;" width="20" height="20" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
        </svg>
        <p>{{$product->id_loai==1 ? "Số tự đông" : "Số sàn"}}</p>
        <svg class="float-end" xmlns="http://www.w3.org/2000/svg" style="margin-left:20px;"width="20" height="20" fill="currentColor" class="bi bi-fuel-pump-fill" viewBox="0 0 16 16">
        <path d="M1 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v8a2 2 0 0 1 2 2v.5a.5.5 0 0 0 1 0V8h-.5a.5.5 0 0 1-.5-.5V4.375a.5.5 0 0 1 .5-.5h1.495c-.011-.476-.053-.894-.201-1.222a.97.97 0 0 0-.394-.458c-.184-.11-.464-.195-.9-.195a.5.5 0 0 1 0-1q.846-.002 1.412.336c.383.228.634.551.794.907.295.655.294 1.465.294 2.081V7.5a.5.5 0 0 1-.5.5H15v4.5a1.5 1.5 0 0 1-3 0V12a1 1 0 0 0-1-1v4h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1zm2.5 0a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5z"/>
      </svg>
        <p>Xăng</p>
        </span>
        
           </div>
          <!-- <button class="btn">Go Premium</button> -->
        </div>
      @endforeach
        
      </div>
    </section>
   
    <section class="contact">
      <div class="section__container contact__container">
        <div class="contact__content">
          <p class="section__subheader">LIÊN HỆ CHÚNG TÔI</p>
          <h2 class="section__header">Hãy tưởng tượng chiếc xe của bạn lại có cảm giác mới mẻ</h2>
          <p class="section__description">
          Hãy trải nghiệm sự kỳ diệu của một chuyến đi được trẻ hóa khi chúng tôi chăm sóc chiếc xe của bạn một cách chính xác, mang lại cảm giác tốt như mới.
          </p>
          <div class="contact__btns">
            <button class="btn">Dịch vụ của chúng tôi</button>
            <button class="btn">Liên hệ chúng tôi</button>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container testimonial__container" id="client">
      <p class="section__subheader">GIẤY TIẾN CỬ NGƯỜI ỦY THÁC</p>
      <h2 class="section__header">100% được khách hàng chấp thuận</h2>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="testimonial__card">
              <img src="../resources/frontend/assets/testimonial-1.jpg" alt="testimonial" />
              <p>
                I couldn't believe my eyes when I got my car back from the
                service. It looked and drove like it had just rolled off the
                assembly line. The team did an incredible job, and I'm a
                customer for life!
              </p>
              <h4>- Sarah T.</h4>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial__card">
              <img src="../resources/frontend/assets/testimonial-2.jpg" alt="testimonial" />
              <p>
                I've been bringing my car here for years, and they never
                disappoint. Their attention to detail and commitment to quality
                service is unmatched. My car always feels brand new after a
                visit.
              </p>
              <h4>- John P.</h4>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial__card">
              <img src="../resources/frontend/assets/testimonial-3.jpg" alt="testimonial" />
              <p>
                As a car enthusiast, I'm extremely particular about who touches
                my prized possession. Their team's expertise and passion for
                cars truly shine through in their work. My car has never looked
                better.
              </p>
              <h4>- David S.</h4>
            </div>
          </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </section>
    
@endsection

