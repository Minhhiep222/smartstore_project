<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/productDetail.css') }}">
    <!-- <script src="{{asset('./js/productDetail1.js')}}"></script> -->
    
    
</head>

<body>
<section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="./images/havert.jpg" alt="..." /></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder">IPhone 14 Pro max 512 GB</h1>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through">18.000.000vnđ</span>
                            <span>18.000.000vnđ</span>
                        </div>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related products</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Sale Item</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
    <div class="viewComment">
        <h2>Máy in laser trắng đen đơn năng Brother HL-L2366DW Wifi</h2>
         <div class="totalComment">
            <div class="groupStar">
            <h5>4.0</h5>
            <h5 style="opacity: 0">.</h5>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>   
            <h5 style="opacity: 0">.</h5>
            <p>100 </p>
            <p style="opacity: 0">.</p>
            <p> Đánh Giá</p>
            </div>
         </div>
        <!-- <div class="percenLike">
        <i class="fa-solid fa-thumbs-up"></i>
        <div class="progress">
           <div class="progress-bar bg-warning" style="width:60%"></div>
        </div>
        <p>60%</p>
        </div>

        <div class="percendisLike">
        <i class="fa-solid fa-thumbs-down"></i>
        <div class="progress">
           <div class="progress-bar bg-warning" style="width:40%"></div>
        </div>
        <p>40%</p>
        </div> -->
        <div class="oneStar">
        <div class="groupStart">
         <p>1</p>
         <p style="opacity: 0;">.</p>
        <i class="fa-solid fa-star"></i>
        </div>
        <div class="progress">
           <div class="progress-bar bg-warning" style="width:3%"></div>
        </div>
        <p>3%</p>
        </div>

        <div class="twoStar">
        <div class="groupStart">
         <p>2</p>
         <p style="opacity: 0;">.</p>
        <i class="fa-solid fa-star"></i>
        </div>
        <div class="progress">
           <div class="progress-bar bg-warning" style="width:10%"></div>
        </div>
        <p>10%</p>
        </div>

        <div class="threeStar">
        <div class="groupStart">
         <p>3</p>
         <p style="opacity: 0;">.</p>
        <i class="fa-solid fa-star"></i>
        </div>
        <div class="progress">
           <div class="progress-bar bg-warning" style="width:20%"></div>
        </div>
        <p>20%</p>
        </div>

        <div class="fourStar">
        <div class="groupStart">
         <p>4</p>
         <p style="opacity: 0;">.</p>
        <i class="fa-solid fa-star"></i>
        </div>
        <div class="progress">
           <div class="progress-bar bg-warning" style="width:20%"></div>
        </div>
        <p>20%</p>
        </div>

        <div class="fiveStar">
        <div class="groupStart">
         <p>5</p>
         <p style="opacity: 0;">.</p>
        <i class="fa-solid fa-star"></i>
        </div>
        <div class="progress">
           <div class="progress-bar bg-warning" style="width:47%"></div>
        </div>
        <p>47%</p>
        </div>

       <div class="titleFilterEva">
       <h2>Lọc Đánh Giá</h2>   
       </div>
    <form action="" method="">
    <div class="filterEvaluate">
        <button  type="submit"  class="all" placeholder="">
            <a href="">Tất cả</a>
        </button>
        <button type="submit" class="fiveStar">
          <a href=""><p>5</p></a>
           <a href=""><i class="fa-solid fa-star"></i></a>
        </button>
        <button class="fourStar">
           <a href=""> <p>4</p></a>
            <a href=""><i class="fa-solid fa-star"></i></a>
        </button>
        <button class="threeStar">
           <a href=""><p>4</p></a>
          <a href=""><i class="fa-solid fa-star"></i></a>
        </button>
        <button class="twoStar">
           <a href=""><p>2</p></a>
          <a href="">  <i class="fa-solid fa-star"></i></a>
        </button>
        <button class="oneStar">
           <a href=""><p>1</p></a>
          <a href=""> <i class="fa-solid fa-star"></i></a>
        </button>
     </div>
    </form>
   <!-- copy tu commentUser -->
     <div class="CommentUser">
     <div class="nameUser">
        <h4>Nguyễn Đạt</h4>
        <i class="fa-solid fa-circle-check"></i>
        <p>Đã mua tại Smartstore</p>
     </div>
     <div class="commentUserStar">
            <i class="startUser fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>   
    </div>

    <div class="commentUserContent">
        <p>Tạm thời thấy ổn, có điều cơm lâu chín hơn nồi cơm truyền thống cũ, cơm có vẻ khô hơn.Ưu điểm là có tính năng giữ ấm</p>
      </div>

      <div class="CommentImageUser">
        <img src="./images/havert.jpg" alt="">
      </div>

      <div class="usedAndlike">
        <div class="userLike">
        <a href=""><i class="fa-regular fa-thumbs-up"></i></a>
        <p>Hữu ích</p>
        </div>
        <div class="UserUsed">
            <p>|</p>
            <p>Đã dùng khoảng </p>
            <p>3 tháng</p>
        </div>
      </div>
      <div class="ThanhNgang"></div>
     </div>
     <button id="btnEvaluate" class="writeEvaluate">Viết đánh giá</button>
    </div>

   <form action="">
   <div id="formComment" class="formComment">
      <div class="formCommentImg">
         <img src="./images/havert.jpg" alt="">
      </div>
     <div class="formCommentName">
     <h4>Máy in laser trắng đen đơn năng Brother HL-L2366DW Wifi</h4>
     </div>
     <div class="formCommentContent">
     <textarea placeholder="Chia sẻ cảm nhận..." id="w3review" name="w3review" rows="4" cols="55"></textarea>
     </div>

     <div class="formCommentImg">
     <button class="btn--textFile" onclick="document.getElementById('getFile').click()">
      <i class="fa-solid fa-camera"></i>
      <input class="" type='file' id="getFile" style="display:none" name="img">                  
     </button>
      <p  onclick="document.getElementById('getFile').click()">Gửi ảnh thực tế</p>
     </div>
     <button class="btn-submit">Gửi Đánh Giá</button>
    </div>
   </form>
   
  <script>
    
var evaluate = document.getElementById("btnEvaluate");
var formEvaluate = document.getElementById("formComment");
evaluate.addEventListener("click",function() {
formEvaluate.style.display="block";
});

  </script>
</body>
</html>