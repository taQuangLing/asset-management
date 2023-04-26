<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="{{ asset('css/app.css') }}" >
    <link rel="stylesheet"  href="{{ asset('css/layout.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/quanlycapphat.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quanlybaohanh.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quanlyphieunhap.css') }}">
</head>

<body>
<div id="data" style="display:none;">{{ $data }}</div>
<div class="layout">
  <header>
    <div class="imgcontainer">
      <img
        src="https://upload.wikimedia.org/wikipedia/vi/thumb/a/a1/Man_Utd_FC_.svg/1200px-Man_Utd_FC_.svg.png"
        alt="Logo" class="logo" width="50px" height="50px">
    </div>
    <h2>Cùng nhau quản lý tài sản </h2>
    <div class="imgcontainer">
      <span>Đăng xuất</span>
      <img
        src="https://scontent.fhan1-1.fna.fbcdn.net/v/t39.30808-1/336171687_129162599933758_439339820751928032_n.jpg?stp=dst-jpg_p200x200&_nc_cat=106&ccb=1-7&_nc_sid=7206a8&_nc_ohc=xM9NVGHRHwUAX8LJYml&_nc_ht=scontent.fhan1-1.fna&oh=00_AfDXs0xiqn-k64SgAQS_wgf4ElmBn07RCvh5L7dzh9npCQ&oe=644A4641"
        alt="Avatar" class="avatar" width="50px" height="50px">
    </div>
  </header>
    <main>
      <div class="sidebar">
        <ul>
          <li class="{{ str_contains(request()->url(), '/taisan') ? 'active' : '' }}"><a href="taisan">Quản lý tài sản</a></li>
          <li class="{{ str_contains(request()->url(), '/phieunhap') ? 'active' : '' }}"><a href="phieunhap">Quản lý phiếu nhập</a></li>
          <li class="{{ str_contains(request()->url(), '/baohanh') ? 'active' : '' }}"><a href="baohanh">Quản lý bảo hành</a></li>
          <li class="{{ str_contains(request()->url(), '/capphat') ? 'active' : '' }}"><a href="capphat">Quản lý cấp phát</a></li>
          <li class="{{ str_contains(request()->url(), '/taisan') ? 'active' : '' }}">Kiểm kê tài sản</li>
          <li class="{{ str_contains(request()->url(), '/taisan') ? 'active' : '' }}">Thống kê báo cáo</li>
        </ul>
      </div>
      <div class="main">
        <div class="search">
            <input class="input" type="text" placeholder="Ten tai san"/>
            <button class="btn btn-green">Tim kiem</button>
        </div>

        @if (Route::is('taisan'))
          @include('quanlytaisan');
        @elseif (Route::is('capphat'))
          @include('quanlycapphat');
        @elseif (Route::is('baohanh'))
          @include('quanlybaohanh');
        @elseif (Route::is('phieunhap'))
          @include('quanlyphieunhap');
        @endif
        
      </div>
    </main>


</div>

</div>


<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/layout.js')}}"></script>
<script type="module" src="{{asset('js/quanlycapphat.js')}}"></script>
<script type="module" src="{{asset('js/quanlybaohanh.js')}}"></script>
<script type="module" src="{{asset('js/quanlyphieunhap.js')}}"></script>
</body>

</html>
