<!DOCTYPE html>
<html lang="en">
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Item - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />
    </head>
	<style>
		.hinh{
			width: 200px;
			height: 200px;
		}
	</style>
    <body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div id="shopping-cart">
						<h2>Shopping Cart</h2>
						
						<table class="table" cellpadding="10" cellspacing="1" >
						<tbody>
							<tr>
								<th style="text-align:left;">image</th>
								<th style="text-align:left;">Name</th>
								<th style="text-align:left;">Type</th>
								<th style="text-align:right;" width="5%">Quantity</th>
								<th style="text-align:right;" width="10%">Price<br>( in vnđ)</th>
								<th style="text-align:center;" width="5%">Remove</th>
							</tr>
							<tr>
							<td><img src="/img/1.img" alt=""class="hinh"></td>
								<td>IPhone 14 Pro max 512 GB</td>
								<td>Đồ điện tử</td>
								<td style="text-align:right;">1</td>
								<td style="text-align:right;">16.000.000</td>
								<td style="text-align:center;"><a href="#" class=""><i class="bi bi-trash"></i></a></td>
							</tr>
                            <tr>
							<td><img src="/img/2.img" alt=""class="hinh"></td>
								<td>Giày Jodan 1 high Obsidian</td>
								<td>Thời trang</td>
								<td style="text-align:right;">1</td>
								<td style="text-align:right;">8.000.000</td>
								<td style="text-align:center;"><a href="#" class=""><i class="bi bi-trash"></i></a></td>
							</tr>
                            <tr>
							<td><img src="/img/3.img" alt=""class="hinh"></td>
								<td>Quần thun ống rộng nam</td>
								<td>Thời trang</td>
								<td style="text-align:right;">1</td>
								<td style="text-align:right;">189.000</td>
								<td style="text-align:center;"><a href="#" class=""><i class="bi bi-trash"></i></a></td>
							</tr>  
							<tr>
							<td><img src="/img/4.img" alt=""class="hinh"></td>
								<td>Ốp lưng iPhone 14 Pro Max RINGKE Fusion X</td>
								<td>Đồ điện tử</td>
								<td style="text-align:right;">2</td>
								<td style="text-align:right;">148.000</td>
								<td style="text-align:center;"><a href="#" class=""><i class="bi bi-trash"></i></a></td>
							</tr>              
							<tr>
								<td align="right"></td>
								<td colspan="2" align="right">Total:</td>
								<td align="right">4</td>
								<td align="right" colspan="1"><strong>2,900.00</strong></td>
								<td align="right"></td>
								<td><div class="float-end">
							<a class="btn btn-outline-dark mt-auto" href="#">Empty Cart</a>
						</div>
								</td>
							</tr>
						</tbody>
					</table>
  </div>
                </div>
            </div>
        </section>
        
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
    </body>
</html>
