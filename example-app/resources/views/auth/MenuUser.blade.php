<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBarMenu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="{{ asset('styles.css') }}" rel="stylesheet">
  </head>
<body>
  <div class="navBar">
    <div class="wrap-navBar-InfoUser">
        <img class="avatar" src="./images/havert.jpg" alt="">
        <div class="navBar-UserUpdate">
         <a href="UpdateProfileUser"> <i class="fa-solid fa-highlighter"></i></a>
         <a href="UpdateProfileUser">Sửa hồ sơ</a>
        </div>
    </div>
    <h4>Nguyễn Đạt</h4>
   <a class="navbar-UserChoosen" href="userProfile" onclick="changeColor(this)">Hồ Sơ</a>
   <a class="navbar-UserChoosen" href="updateProfileUser" onclick="changeColor(this)">Đổi Mật Khẩu</a>
   <a class="navbar-UserChoosen" href="profileUserOrder" onclick="changeColor(this)">Đơn Mua</a>
   <a class="navbar-UserChoosen" href="profileUserRecentView" onclick="changeColor(this)">Đã Xem</a>
  </div>
  @yield('content')





</body>
</html>
