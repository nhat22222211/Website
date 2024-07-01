<header class="header">
      <nav>
        <div class="nav__bar">
          <div class="logo nav__logo">
            <a href="#"><img src="../resources/frontend/assets/logo.png" alt="logo" /></a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-3-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="trangchu">Trang chủ</a></li>
          <li><a href="gioithieu">Về chúng tôi</a></li>
          <li><a href="don-hang">Đơn hàng của bạn</a></li>
          <li><a href="dich-vu">Dịch vụ</a></li>
          @if(Auth::check())
          <li>   
          <a href="dang-ki">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
          </svg>
            {{Auth::user()->name}}</a>
          </li>
          @else
          <li> 
          <a href="dang-ki">
          Tài khoản</a>
          </li>
          @endif
        </ul>
      </nav>
      <div class="section__container header__container" id="home">
        <div class="header__content">
          <h1>
          Chúng tôi có trình độ và chuyên nghiệp
          </h1>
          <div class="header__btn">
            <button class="btn">Đọc thêm</button>
          </div>
        </div>
      </div>
    </header>