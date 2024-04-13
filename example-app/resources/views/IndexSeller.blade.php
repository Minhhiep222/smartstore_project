<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>IndexSeller</title>
    <style>
     .TopInfomation-Seller {
        display: flex;
        background-color: white;
        background-color: black;  
        
     }    
     .TopInfomation-Seller #seller-search {
        height: 38px;
        font-size: 15px;
        width: 460px;
        margin-left: 150px;
        margin-top: 45px;
        border-radius: 1px;
     }
     
   .TopInfomation-Seller .TopInfomation-Seller-img .avatar {
    margin-top:10px;
    margin-bottom: 10px;
    margin-left:40px;
    width: 120px;
    height: 120px;
    background-size:cover;
    border-radius: 100px;
    border: 0.5px solid white;
   }
   .TopInfomation-Seller .TopInfomation-Seller-info {
    margin-left: 20px;
   }
   .TopInfomation-Seller .TopInfomation-Seller-info h3 {
    margin-bottom: 10px;
    margin-top: 20px;
    font-size: 25px;
    color: white;
   }
   .TopInfomation-Seller .TopInfomation-Seller-info .topInfoCountProDuct {
    display: flex;
    border: 2px solid white;
    color: white;
   }
   .TopInfomation-Seller .TopInfomation-Seller-info .topInfoCountProDuct h4 {
    margin: 5px;
    font-size: 20px;
   }
   .MenuArrangSeller {
    margin-top:20px;
    display:flex;
    border: 2px solid black;
    width: 650px;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-left: calc(50% - 325px);
    margin-top:30px;
    margin-bottom: 40px;

   }
   .MenuArrangSeller .displayAll a {
    text-decoration:none;
    font-weight: bold;
    color:black;
    border: 2px solid black;
    width: 96px;
    height: 36px;
    display:inline-block;
    text-align:center;
    line-height: 36px;
    margin-left: 50px;
    color
   }
   .MenuArrangSeller .ArrangeID .selectID{
   border: 2px solid black;
   width: 100px;
   height: 40px;
   text-align :center;
   font-weight: bold;
   margin-left: 50px;
}
.MenuArrangSeller .ArrangeCate .selectCate{
   border: 2px solid black;
   width: 100px;
   height: 40px;
   text-align :center;
   font-weight: bold;
   margin-left: 50px;
}
  .MenuArrangSeller .ArrangePrice .selectPrice{
   border: 2px solid black;
   width: 100px;
   height: 40px;
   text-align :center;
   font-weight: bold;
   margin-left: 50px;
}
.card-titleA {
    margin-bottom: 20px;
    color : black;
    text-decoration: none;
}
.product-price {
    color : red;
}
.card {
        max-width: 180px; 
        max-height: 400px;
    }
 
.IndexSeller_Product {
  height: 180px;
  width: 180px;
}
.QuanlityProduct {
    margin-top : 3px;
}
.CateProduct {
    margin-top : 3px;
}
.productPrice {
    margin-top: 20px;
    margin-bottom: -25px;
}
.fa-cart-shopping {
    font-size: 45px;
    margin-left: 120px;
    color: orange;
    line-height: 135px;
   
}
    </style>
</head>
<body>
<div class="TopInfomation-Seller">

<div class="TopInfomation-Seller-img">
<img class="avatar" src="./images/havert.jpg" alt="">
</div>
<div class="TopInfomation-Seller-info">
    <h3>Clouzy</h3>
    <div class="topInfoCountProDuct">
        <h4>52</h4>
        <h4>Sản Phẩm</h4>
    </div>
</div>
<form class="">
        <input id="seller-search" class="form-control me-2" type="text" placeholder="Tìm Kiếm Trong Shop">

 </form>
<a href=""> <i class="fa-solid fa-cart-shopping"></i></a>
</div>

  
 <div class="MenuArrangSeller">

 <div class="displayAll">
    <a href="">Tất Cả</a>
 </div>

 <div class="ArrangeID">
   <form action="" method="post">
       <select class="selectID" name="sort_order" id="">
       <option  value="New">Mới Nhất</option>
        <option value="Old">Cũ Nhât</option>
       </select>
    </form>
   </div>

   <div class="ArrangeCate">
   <form action="" method="post">
       <select class="selectCate" name="sort_order" id="">
       <option  value="Quan">Áo</option>
        <option value="Ao">Quần</option>
       </select>
    </form>
   </div>



   <div class="ArrangePrice">
   <form action="" method="post">
       <select class="selectPrice" name="sort_order" id="">
       <option  value="asc">Tăng Dần</option>
        <option value="esc">Giảm Dần</option>
       </select>
       
    </form>
   </div>
 </div>
 

 <div class="container">
        <div class="row row-cols-1 row-cols-md-5 g-5">        
             <div class="col">
                    <div class="card">
                       <img class="IndexSeller_Product" src="./images/havert.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="card-titleA" href="">IPhone 19 Pro Max</a></h5>
                            <div class="productPrice">
                            Giá : <span class="product-price">200.000</span>
                            </div>
                             <br>
                           <div class="QuanlityProduct">
                           Số Lượng : <span class="product-quantity">200.000</span>
                           </div>
                          <div class="CateProduct">
                          <h6>Điện Thoại</h6>
                          </div>
                        </div>
                    </div>
                </div>    
                
                <div class="col">
                    <div class="card">
                       <img class="IndexSeller_Product" src="./images/havert.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="card-titleA" href="">IPhone 19 Pro Max</a></h5>
                            <div class="productPrice">
                            Giá : <span class="product-price">200.000</span>
                            </div>
                             <br>
                           <div class="QuanlityProduct">
                           Số Lượng : <span class="product-quantity">200.000</span>
                           </div>
                          <div class="CateProduct">
                          <h6>Điện Thoại</h6>
                          </div>
                        </div>
                    </div>
                </div>    

                <div class="col">
                    <div class="card">
                       <img class="IndexSeller_Product" src="./images/havert.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="card-titleA" href="">IPhone 19 Pro Max</a></h5>
                            <div class="productPrice">
                            Giá : <span class="product-price">200.000</span>
                            </div>
                             <br>
                           <div class="QuanlityProduct">
                           Số Lượng : <span class="product-quantity">200.000</span>
                           </div>
                          <div class="CateProduct">
                          <h6>Điện Thoại</h6>
                          </div>
                        </div>
                    </div>
                </div>    

                <div class="col">
                    <div class="card">
                       <img class="IndexSeller_Product" src="./images/havert.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="card-titleA" href="">IPhone 19 Pro Max</a></h5>
                            <div class="productPrice">
                            Giá : <span class="product-price">200.000</span>
                            </div>
                             <br>
                           <div class="QuanlityProduct">
                           Số Lượng : <span class="product-quantity">200.000</span>
                           </div>
                          <div class="CateProduct">
                          <h6>Điện Thoại</h6>
                          </div>
                        </div>
                    </div>
                </div>    

                <div class="col">
                    <div class="card">
                       <img class="IndexSeller_Product" src="./images/havert.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="card-titleA" href="">IPhone 19 Pro Max</a></h5>
                            <div class="productPrice">
                            Giá : <span class="product-price">200.000</span>
                            </div>
                             <br>
                           <div class="QuanlityProduct">
                           Số Lượng : <span class="product-quantity">200.000</span>
                           </div>
                          <div class="CateProduct">
                          <h6>Điện Thoại</h6>
                          </div>
                        </div>
                    </div>
                </div>    

                <div class="col">
                    <div class="card">
                       <img class="IndexSeller_Product" src="./images/havert.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="card-titleA" href="">IPhone 19 Pro Max</a></h5>
                            <div class="productPrice">
                            Giá : <span class="product-price">200.000</span>
                            </div>
                             <br>
                           <div class="QuanlityProduct">
                           Số Lượng : <span class="product-quantity">200.000</span>
                           </div>
                          <div class="CateProduct">
                          <h6>Điện Thoại</h6>
                          </div>
                        </div>
                    </div>
                </div>    

                <div class="col">
                    <div class="card">
                       <img class="IndexSeller_Product" src="./images/havert.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="card-titleA" href="">IPhone 19 Pro Max</a></h5>
                            <div class="productPrice">
                            Giá : <span class="product-price">200.000</span>
                            </div>
                             <br>
                           <div class="QuanlityProduct">
                           Số Lượng : <span class="product-quantity">200.000</span>
                           </div>
                          <div class="CateProduct">
                          <h6>Điện Thoại</h6>
                          </div>
                        </div>
                    </div>
                </div>    

                <div class="col">
                    <div class="card">
                       <img class="IndexSeller_Product" src="./images/havert.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="card-titleA" href="">IPhone 19 Pro Max</a></h5>
                            <div class="productPrice">
                            Giá : <span class="product-price">200.000</span>
                            </div>
                             <br>
                           <div class="QuanlityProduct">
                           Số Lượng : <span class="product-quantity">200.000</span>
                           </div>
                          <div class="CateProduct">
                          <h6>Điện Thoại</h6>
                          </div>
                        </div>
                    </div>
                </div>    

                <div class="col">
                    <div class="card">
                       <img class="IndexSeller_Product" src="./images/havert.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="card-titleA" href="">IPhone 19 Pro Max</a></h5>
                            <div class="productPrice">
                            Giá : <span class="product-price">200.000</span>
                            </div>
                             <br>
                           <div class="QuanlityProduct">
                           Số Lượng : <span class="product-quantity">200.000</span>
                           </div>
                          <div class="CateProduct">
                          <h6>Điện Thoại</h6>
                          </div>
                        </div>
                    </div>
                </div>    
        </div>
    </div>
</body>
</html>