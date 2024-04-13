<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdateMenuUser</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<style>
    .main-ProfileUser {
        position: absolute;
        left : 29%;
    }
    .main-ProfileUser h3 {
        font-size : 30px;
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
    .main-ProfileUser .btnUpdate::before{
    content:"";
    inset:0;
    position: absolute;
    z-index:1;
    background-color: rgb(94, 219, 219);
    z-index:-1;
    border-radius : 5px;
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
    .main-ProfileUser .Profile-UserInfomation input{
     font-size: 16px;
     margin-top: 33px;
     margin-left: 30px;
     position : absolute;
     left: 20%;
     border: none;
     opacity: 0.7;
    }
    .main-ProfileUser .Profile-UserInfomation .UserProfile-radio {
        margin-left: 100px;
      
    }
    .main-ProfileUser .Profile-UserInfomation .UserProfile-radio #Profile-Nam {
        margin-left: 70px;
        width: 16px;
        height: 16px;
      
    }
    .main-ProfileUser .Profile-UserInfomation .UserProfile-radio #Profile-Nu {
        margin-left:125px;
        width: 16px;
        height: 16px;
    }
    .main-ProfileUser .Profile-UserInfomation .UserProfile-radio .lb-Profile-Nam {
        position:absolute;
       margin-top:30px;
       font-size: 18px;
    }
    .main-ProfileUser .Profile-UserInfomation .UserProfile-radio .lb-Profile-Nu {
      position:absolute;
      margin-top:30px;
        margin-left: 65px;
        font-size: 18px;

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
        right: -6%;
        top: 25%;
    }
    .main-ProfileUser .Profile-UserImages .avatar {
    width: 180px;
    height: 180px;
    background-size:cover;
    border-radius: 100px;
    position: absolute;
    margin-left: 100px;
    }
    .main-ProfileUser .Profile-UserImages .input-UpdateProfilename {
     font-size : 28px;
     text-align: center;
     width: 300px;     
     margin-top: 250px;
     margin-left:40px;
     border: none;
    }
    .main-ProfileUser .Profile-UserImages .input-UpdateProfileImages {
        margin-left:100px;
        position: absolute;
        margin-top: 205px;
       
    }
    .main-ProfileUser  .btnUpdate:active::before 
    {
    animation: scaleButton 0.5s ease;
     }
     .main-ProfileUser .btnUpdate:hover h4
     {
     opacity:0.7;
        }
    .main-ProfileUser  .btnUpdate:hover i
    {
    opacity:0.7;   
    }
    .main-ProfileUser .btnUpdate:hover 
    {
     border-color: rgb(94, 219, 219, 0.5);
    }

  @keyframes scaleButton {
    0% {
        opacity:0;
        transform: scaleX(1) scaleY(1);
    }
    100% {
        opacity: 0.12;
        transform: scaleX(1.4) scaleY(1.7);
       
    }
}
</style>
<body>
@extends('MenuUser')
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