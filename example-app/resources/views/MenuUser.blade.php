<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBarMenu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<style>
   .navBar {
    margin-top: 45px;
    width: 300px;
    border-right: solid 2px rgba(0, 0, 0, 0.2);
    position: fixed;
   }
   .navBar .avatar {
    width: 120px;
    height: 120px;
    background-size:cover;
    border-radius: 100px;
   }
   .navBar h4 {
    font-size: 23px;
    left: 135px;
    position: absolute;
    top: -5px;
   }
   .navBar .wrap-navBar-InfoUser {
    display : flex;
   }
 .navBar .wrap-navBar-InfoUser .navBar-UserUpdate {
   margin-top: 60px;
   display: flex; 
   margin-left:15px;
   }
   .navBar .wrap-navBar-InfoUser .navBar-UserUpdate .fa-highlighter {

    font-size: 20px;
   }
   .navBar .wrap-navBar-InfoUser .navBar-UserUpdate a{
    display: inline-block;
    margin-left:5px;
    font-size: 18px;
    text-decoration:none;
    color:black;
   }
   .navBar .navbar-UserChoosen {
     display: inline-block;
     background-color: white;
     margin-top: 50px;
     width: 155px;
     height: 35px;
     border: 2px solid black;
     margin-left: calc(140px - 77px);
     font-size: 25px;
     text-align:center;
     text-decoration:none;
     color: black;
     line-height : 35px;
   }
   .navBar .navbar-UserChoosen:hover {
    color: rgba(0, 0, 0, 0.7);
    border-color: rgba(0, 0, 0, 0.7);
   }
   .navBar .navbar-UserChoosen:active {
    border: 2px solid red;
    color : red;
   }
</style>
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
   <a class="navbar-UserChoosen" href="UserProfile" onclick="changeColor(this)">Hồ Sơ</a>
   <a class="navbar-UserChoosen" href="UpdateProfileUser" onclick="changeColor(this)">Đổi Mật Khẩu</a>
   <a class="navbar-UserChoosen" href="ProfileUserOrder" onclick="changeColor(this)">Đơn Mua</a>
   <a class="navbar-UserChoosen" href="ProfileUserRecentView" onclick="changeColor(this)">Đã Xem</a>
  </div>
  @yield('content')





</body>
</html>
