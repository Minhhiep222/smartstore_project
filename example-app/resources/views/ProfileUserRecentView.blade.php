<!DOCTYPE html>
<html lang="en">
./<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProfileUserRecentView</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<style>
    .main-ProfileUserOrder {
        position: absolute;
        left : 29%;
        
    }
    .main-ProfileUserOrder h3 {
        font-size : 30px;
    }
    .main-ProfileUserOrder .ThanhNgang {
        width: 800px;
        border:solid 2px rgba(0, 0, 0, 0.2);
    }   
    .main-ProfileUserOrder .topInfo-ProfileUser {
        display: flex;
        margin-top: 20px;
        margin-bottom:-10px;
    }
   
.main-ProfileUserOrder .topInfo-ProfileUser .btnChat {
    margin-top: 23px;
    display : flex;
    height : 37px;
    width : 100px;
    border: 1px solid rgb(94, 219, 219); 
    justify-content : center;
    background-color: white;
    border-radius : 5px;
    position:relative;
    text-decoration: none; 
    margin-left:20px;
}
.main-ProfileUserOrder .topInfo-ProfileUser .btnShop {
    margin-top: 23px;
    display : flex;
    height : 37px;
    width : 100px;
    border: 1px solid black; 
    justify-content : center;
    background-color: white;
    border-radius : 5px;
    position:relative;
    text-decoration: none; 
    margin-left:20px;
}

.main-ProfileUserOrder .topInfo-ProfileUser .btnChat h4 {
    color : rgb(94, 219, 219); ;
    font-size: 21px;
    margin-top: 5px;
   
}
.main-ProfileUserOrder .topInfo-ProfileUser .btnShop h4 {
    color : black ;
    font-size: 21px;
    margin-top: 5px;
   
}
.main-ProfileUserOrder .topInfo-ProfileUser .btnChat .fa-comments {
    font-size : 16px;
    margin-top : 8px;
    margin-right : 10px; 
    color: black;
} 
.main-ProfileUserOrder .topInfo-ProfileUser .btnShop .fa-shop {
    font-size : 16px;
    margin-top : 8px;
    margin-right : 10px; 
    color: black;
} 

.main-ProfileUserOrder .Infomation-ProfileUserProduct{
    display: flex;
    border:solid 2px rgba(0, 0, 0, 0.2);
    border-left: none;
    border-right:none;
}
.main-ProfileUserOrder .Infomation-ProfileUserProduct .ProfileUserProductInfo {
    margin-left: 30px;
}
.main-ProfileUserOrder .Infomation-ProfileUserProduct .ProfileUserProductInfo .ProfileUserProductCate {
     font-size:20px;
     display: flex;
     margin-top: -25px;
}
.main-ProfileUserOrder .Infomation-ProfileUserProduct .ProfileUserProductInfo .ProfileUserProductCate p{
    margin-top: 26px;
    margin-left: 10px;
}
.main-ProfileUserOrder .ProfileUserProductTotal {
    font-size:25px;
    display:flex;
    margin-left: 550px;
}
.main-ProfileUserOrder .ProfileUserProductTotal p{
   margin-top: 36px;
   margin-left: 30px;
   color: red;
}
.main-ProfileUserOrder .Infomation-ProfileUserProduct .ProfileUserProductImages img {
    width: 140px;
    height: 130px;
    background-size:cover;
    margin-top:15px;
    margin-bottom:15px;
}

</style>
<body>
@extends('MenuUser')
@section('content')
<div class="main-ProfileUserOrder">
<h3>Xem Gần Đây</h3>
<div class="ThanhNgang"></div>
<div class="topInfo-ProfileUser">
    <h3>Japan Food</h3>
   
    <a  href="" class="btnChat">
    <i class="fa-solid fa-comments"></i>
        <h4>Chat</h4>
    </a>
    <a  href="" class="btnShop">
   <i class="fa-solid fa-shop"></i>
        <h4>Shop</h4>
    </a>
</div>
<div class="Infomation-ProfileUserProduct">
 <div class="ProfileUserProductImages">
    <img src="./images/havert.jpg" alt="">
 </div>
 <div class="ProfileUserProductInfo">
    <h3>Ngũ cốc CalBee ănn kiêng Nhật Bản</h3>
     <div class="ProfileUserProductCate">
     <h4>Loại Sản Phẩm: </h4>
     <p>Thực đơn giảm cân</p>
     </div>
 </div>
</div>


</div>

@endsection
</body>
</html>