<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Trang quản trị</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#demo1" aria-expanded="false" aria-controls="demo1">
          <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title">Đăng kí, đăng nhập</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="demo1">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('register')}}">Đăng kí</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('login')}}">Đăng nhập</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('tournaments.register')}}">Đăng ký tham gia giải đấu</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#demo2" aria-expanded="false" aria-controls="demo2">
          <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title">Đội bóng</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="demo2">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('players.index')}}">Danh sách cầu thủ</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#demo3" aria-expanded="false" aria-controls="demo3">
          <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title">Giải đấu</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="demo3">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{route('tournaments.create')}}">Tạo giải đấu</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('tournaments.schedule')}}">Lịch thi đấu, kết quả</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('tournaments.matches')}}">Ghi nhận kết quả trận đấu</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('tournaments.manage')}}">Quản lí giải đấu</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('tournaments.report')}}">Lập báo cáo giải đấu</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('tournaments.rule')}}">Thay đổi qui định giải đấu</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Liên hệ quảng cáo</a></li>
          
          </ul>
        </div>
      </li>
      
    </ul>
  </nav>