<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>IndexSeller</title>
    <style>
     .TopInfomation-Seller {
        display: flex;
        margin-left: 60px;
        margin-top: 30px;
     }    
     .TopInfomation-Seller .seller-search {
        border-radius: 30px;
        height: 23px;
        font-size: 15px;
        opacity: 0.8;
        width: 340px;
        margin-left: 150px;
        margin-top: 40px;
     }
   .TopInfomation-Seller .TopInfomation-Seller-img .avatar {
    width: 150px;
    height: 150px;
    background-size:cover;
    border-radius: 100px;
   }
   .TopInfomation-Seller .TopInfomation-Seller-info {
    margin-left: 20px;
   }
   .TopInfomation-Seller .TopInfomation-Seller-info h3 {
    margin-bottom: 10px;
    font-size: 25px;
   }
   .TopInfomation-Seller .TopInfomation-Seller-info .topInfoCountProDuct {
    display: flex;
    border: 2px solid orange;
    
  
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
    padding-top: 30px;
    padding-bottom: 30px;
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
    color : black;
    text-decoration: none;
}
.product-price {
    color : red;
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
<form action="" method="post">
    <input class="seller-search" type="text" placeholder="Tìm Kiếm Trong Shop">
</form>
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
        <div class="row row-cols-1 row-cols-md-3 g-3">        
             <div class="col">
                    <div class="card">
                       <img class="IndexSeller_Product" src="./images/havert.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="card-titleA" href="">IPhone 19 Pro Max</a></h5>
                             Giá : <span class="product-price">200.000</span>
                             <p>Comfortable, durable and timeless—it's number 1 for a reason. The classic '80s construction is paired with premium details for style that tracks whether you're on court or on the go.</p> 
                             Số Lượng : <span class="product-quantity">200.000</span>
                        </div>
                    </div>
                </div>   

                
        </div>
    </div>
</body>
</html>