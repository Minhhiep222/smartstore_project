<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserProfile</title>
    <link href="{{ asset('styles.css') }}" rel="stylesheet">
    <script src="{{ asset('action.js') }}"></script>
</head>
</style>
<body>
@extends('auth.MenuUser')
@section('content')
<div class="main-ProfileUser">
    <h3>Thông Tin Cá Nhân</h3>
    <div class="ThanhNgang"></div>
    <div class="thanhDoc"></div>
    <div class="Profile-UserInfomation">
       <h4>Email</h4>
       <p id="email">Nnguyendat72@gmail.com</p>
    </div>
    <div class="Profile-UserInfomation">
       <h4>Phone</h4>
       <p id="phone">0329169799</p>
    </div>
    <div class="Profile-UserInfomation">
       <h4>Giới Tính</h4>
       <p>Nam</p>
    </div>
     <div class="Profile-UserInfomation">
       <h4>Ngày Sinh</h4>
       <p>7/2/2004</p>
    </div>
    <div class="Profile-UserInfomation">
       <h4>Số tài Khoản</h4>
       <p id="bankaccount">4712842</p>
    </div>
    <div class="Profile-UserInfomation">
       <h4>Địa Chỉ</h4>
       <p>Thủ Đức/ Hồ Chí Minh</p>
    </div>
    <a href="#" class="btnUpdate">
         <i class="fa-solid fa-wrench"></i>
            <h4>Sửa</h4>
    </a>
   <div class="Profile-UserImages">
   <img class="avatar" src="./images/havert.jpg" alt="">
    <p>Nguyễn Đạt</p>
   </div>
</div>

<script>

// document.addEventListener("DOMContentLoaded", function() {
//     var textElement = document.getElementById('bankaccount');
//     textElement.textContent = textElement.textContent.replace(/[a-zA-Z0-9]/g, '*');
// });

// document.addEventListener("DOMContentLoaded", function() {
//     var textElement = document.getElementById('phone');
//     var textContent = textElement.textContent;
//     var newTextContent = '';
    
//     for (var i = 0; i < textContent.length - 2; i++) {
//         newTextContent += '*';
//     }
    
//     newTextContent += textContent.slice(-2); // Thêm lại hai ký tự cuối cùng
//     textElement.textContent = newTextContent;
// });

// document.addEventListener('DOMContentLoaded', function() {
//     var emailElement = document.getElementById('email');
//     var email = emailElement.textContent;
//     var maskedEmail = maskEmail(email);
//     emailElement.textContent = maskedEmail;
// });

// function maskEmail(email) {
//     var atIndex = email.indexOf('@');
//     if (atIndex > 2) {
//         var maskedPortion = email.substr(2, atIndex - 2).replace(/./g, '*');
//         var maskedEmail = email.substr(0, 2) + maskedPortion + email.substr(atIndex);
//         return maskedEmail;
//     }
//     return email;
// }


</script>
@endsection
</body>
</html>