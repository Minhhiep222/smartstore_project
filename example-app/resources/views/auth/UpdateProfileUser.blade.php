<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdateMenuUser</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="{{ asset('styles2.css') }}" rel="stylesheet"> 
</head>
<body>
@extends('auth.MenuUser')
@section('content')
<form action="" method="post">
<div class="main-ProfileUser">
    <h3>Thay Đổi Thông Tin Cá Nhân</h3>
    <div class="ThanhNgang"></div>
    <div class="thanhDoc"></div>
    <div class="Profile-UserInfomation">
       <h4>Email</h4>
       <!-- <p id="email">Nnguyendat72@gmail.com</p> -->
       <input type="text" value="Nnguyendat72@gmail.com">
    </div>
    <div class="Profile-UserInfomation">
       <h4>Phone</h4>
       <!-- <p id="phone">0329169799</p> -->
       <input type="text" value="0329169799">
    </div>
    <div class="Profile-UserInfomation">
       <h4>Giới Tính</h4>
        <div class="UserProfile-radio">
        <label class="lb-Profile-Nam" for="Profile-Nam">Nam</label>
       <input name="user_Gender" id="Profile-Nam" type="radio">
       <label class="lb-Profile-Nu" for="Profile-Nu">Nữ</label>
       <input name="user_Gender" id="Profile-Nu" type="radio">
        </div>
    </div>
     <div class="Profile-UserInfomation">
       <h4>Ngày Sinh</h4>
       <!-- <p>7/2/2004</p> -->
       <input type="text" value="7/2/2004">
    </div>
    <div class="Profile-UserInfomation">
       <h4>Số tài Khoản</h4>
       <!-- <p id="bankaccount">4712842</p> -->
       <input type="text" value="4712842">
    </div>
    <div class="Profile-UserInfomation">
       <h4>Địa Chỉ</h4>
       <!-- <p>Thủ Đức/ Hồ Chí Minh</p> -->
       <input type="text" value="Thủ Đức/ Hồ Chí Minh">
    </div>
    <a href="#" class="btnUpdate">
         <i class="fa-solid fa-wrench"></i>
            <h4>Lưu</h4>
    </a>
   <div class="Profile-UserImages">
   <img class="avatar" src="./images/havert.jpg" alt="">
    <input class="input-UpdateProfileImages" type="file">
    <input type="text" class="input-UpdateProfilename" value="Nguyễn Đạt"></input>
   </div>
</div>
</form>
@endsection
</body>
</html>