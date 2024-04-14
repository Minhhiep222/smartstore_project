<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProfileUserRecentView</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="{{ asset('styles2.css') }}" rel="stylesheet">
</head>
</style>

<body>
    @extends('auth.MenuUser')
    @section('content')
    <div class="main-ProfileUserOrder">
        <h3>Xem Gần Đây</h3>
        <div class="ThanhNgang"></div>
        <div class="topInfo-ProfileUser">
            <h3>Japan Food</h3>

            <a href="" class="btnChat">
                <i class="fa-solid fa-comments"></i>
                <h4>Chat</h4>
            </a>
            <a href="" class="btnShop">
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