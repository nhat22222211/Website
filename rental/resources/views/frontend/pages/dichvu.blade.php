@extends("frontend/layouts/index")
@section('content')


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
@endsection