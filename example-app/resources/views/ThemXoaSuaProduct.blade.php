<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaravelThemXoaSuaProduct</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/themXoaSuaProduct.css') }}">
<style> 

</style>
</head>
<body>

@section('content')
<button type="button" class="btn btn-success">
    <i class="fa-regular fa-square-plus"></i>
    <h4>Thêm</h4>
</button>

<table  style="width:70%">
    <tr class="main-tr">
        <td></td>
        <td>Sản Phẩm</td>
        <td>Kho</td>
        <td>Phân Loại</td>
        <td></td>
    </tr>
    <tr class="sub-tr">
        <td><img src="{{('images/havert.jpg') }}" alt=""></td>
        <td>Gấu bông Teddy cute</td>
        <td>
            <p>400</p>
            <p class="cach">.</p>
            <p> Sản Phẩm</p>
        </td>
        <td>Gấu Bông</td>
        <td>
         <button class="btnDelete">
         <i class="fa-solid fa-circle-minus"></i>
            <h4>Xóa</h4>
         </button>
          
         <button class="btnUpdate">
         <i class="fa-solid fa-wrench"></i>
            <h4>Sửa</h4>
         </button>
        </td>
    </tr>

    

</table>




</body>
</html>