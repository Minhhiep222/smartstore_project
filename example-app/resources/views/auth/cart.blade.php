@extends('header')
@section('content')
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div id="shopping-cart">
						<h2>Giỏi hàng</h2>
						
						<table class="table" cellpadding="10" cellspacing="1" >
						<tbody>
							<tr>
								<th style="text-align:left;">Hình</th>
								<th style="text-align:left;">Tên</th>
								<th style="text-align:left;">Loại</th>
								<th style="text-align:right;" width="5%">Số Lượng</th>
								<th style="text-align:right;" width="10%">Giá<br>( in vnđ)</th>
								<th style="text-align:center;" width="5%">Xóa</th>
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
							<a class="btn btn-outline-dark mt-auto" href="#">Thanh Toán</a>
						</div>
								</td>
							</tr>
						</tbody>
					</table>
  </div>
                </div>
            </div>
        </section>
@endsection
      
