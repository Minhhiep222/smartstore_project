<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserProfile</title>
</head>
<style>
    .main-ProfileUser {
        position: absolute;
        left : 29%;
    }
    .main-ProfileUser h3 {
        font-size : 25px;
    }
    .main-ProfileUser .ThanhNgang {
        width: 800px;
        border:solid 2px rgba(0, 0, 0, 0.2);
    }
    .main-ProfileUser .thanhDoc {
        border-right:solid 2px rgba(0, 0, 0, 0.2);
        height : 432px;
        margin-top: 17px;
        position : absolute;
        right: 40%;
    }
    .main-ProfileUser .btnUpdate {
    margin-top: 15px;
    display : flex;
    height : 40px;
    width : 130px;
    border: 1px solid rgb(94, 219, 219); 
    justify-content : center;
    background-color: white;
    border-radius : 5px;
    position:relative;
    margin-left: 200px;
    text-decoration: none;
    }
    .main-ProfileUser .btnUpdate h4 {
    color: rgb(94, 219, 219); 
    font-size: 25px;
    margin-top: 3px;
    line-height: 30px;
    }
    
    .main-ProfileUser .btnUpdate .fa-wrench {
    font-size : 20px;
    margin-top : 2px;
    margin-right : 10px;
    color : black;
    line-height: 30px;
    }
    .main-ProfileUser .Profile-UserInfomation{
     display: flex;
    }
    .main-ProfileUser .Profile-UserInfomation p{
     font-size: 18px;
     margin-top: 33px;
     margin-left: 30px;
     position : absolute;
     left: 20%;
     
    }
    .main-ProfileUser .Profile-UserInfomation h4{
     font-size: 22px;
    }
    .main-ProfileUser .Profile-UserInfomation:nth-child(4)  {
    margin-top: -20px;
    }
    .main-ProfileUser .Profile-UserInfomation:nth-child(4) p {
   
    }
    .main-ProfileUser .Profile-UserInfomation:nth-child(5)  {
    margin-top: -20px;
    }
    .main-ProfileUser .Profile-UserInfomation:nth-child(5) p {
    
    }
    .main-ProfileUser .Profile-UserInfomation:nth-child(6)  {
    margin-top: -20px;
    }
    .main-ProfileUser .Profile-UserInfomation:nth-child(6) p {
      
    }
    .main-ProfileUser .Profile-UserInfomation:nth-child(7)  {
    margin-top: -20px;
    }
    .main-ProfileUser .Profile-UserInfomation:nth-child(7) p {
   
    }
    .main-ProfileUser .Profile-UserInfomation:nth-child(8)  {
    margin-top: -20px;
    }
    .main-ProfileUser .Profile-UserInfomation:nth-child(8) p {
   
    }
    .main-ProfileUser .Profile-UserInfomation:nth-child(9)  {
    margin-top: -20px;
    }
    .main-ProfileUser .Profile-UserImages
    {
        position: absolute;
        right: 2%;
        top: 25%;
    }
    .main-ProfileUser .Profile-UserImages .avatar {
    width: 180px;
    height: 180px;
    background-size:cover;
    border-radius: 100px;
    }
    .main-ProfileUser .Profile-UserImages p {
     font-size : 30px;
     text-align: center;
    }
  
</style>
<body>
@extends('MenuUser')
@section('content')
<div class="main-ProfileUser">
    <h3>Thông Tin Cá Nhân</h3>
    <div class="ThanhNgang"></div>
    <div class="thanhDoc"></div>
    <div class="Profile-UserInfomation">
       <h4>Email</h4>
       <p>Nnguyendat72@gmail.com</p>
    </div>
    <div class="Profile-UserInfomation">
       <h4>Phone</h4>
       <p>0329169799</p>
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
       <p>4712842</p>
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
@endsection
</body>
</html>