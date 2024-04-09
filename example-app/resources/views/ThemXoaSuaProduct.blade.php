<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaravelThemXoaSuaProduct</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<style> 
table {
    margin-top : 150px;
    text-align: left;
    margin-left : 140px;
}
.main-tr td {
    font-weight: bold;
    font-size : 24px;
    padding-bottom: 14px;
}

.btn-success {
    display : flex;
    margin-top : 10px;
    position : absolute;
    left : 85%;
    top : 50px;
}
.btnDelete {
    display : flex;
    height : 37px;
    width : 100px;
    border: 1px solid red;
    justify-content : center;
    background-color : white;
    border-radius : 5px;
    position : relative;
  
}
.btnDelete::before {
    content:"";
    inset:0;
    position: absolute;
    z-index:1;
    background-color: red;  
    z-index:-1;
    border-radius : 5px;
}

.btnUpdate {
    margin-top: 15px;
    display : flex;
    height : 37px;
    width : 100px;
    border: 1px solid rgb(94, 219, 219); 
    justify-content : center;
    background-color: white;
    border-radius : 5px;
    position:relative;
}
.btnUpdate::before{
    content:"";
    inset:0;
    position: absolute;
    z-index:1;
    background-color: rgb(94, 219, 219);
    z-index:-1;
    border-radius : 5px;
}

.btnDelete h4 {
    color : red;
    font-size: 21px;
    margin-top: 3px;
    
}
.btnUpdate h4 {
    color : rgb(94, 219, 219); ;
    font-size: 21px;
    margin-top: 3px;
    
}

.fa-wrench {
    font-size : 15px;
    margin-top : 10px;
    margin-right : 10px;
   
} 
.fa-circle-minus {
    font-size : 15px;
    margin-top : 10px;
    margin-right : 10px;
   
} 
.fa-regular {
    margin-right : 10px;
    font-size : 23px;
    margin-top : 5px;
    background-color: black;
}
.main-tr {
    border-bottom : 3px solid rgba(0, 0, 0, 0.2);
}
.sub-tr {
    border-bottom : 3px solid rgba(0, 0, 0, 0.2);
  
}
.sub-tr td:nth-child(2) {
  font-size: 20px;
  color : rgb(29, 204, 204);
}
.sub-tr td:nth-child(3) {
  font-size: 20px;
  display: flex;
  margin-top : 75px;
  
}
.sub-tr td:nth-child(4) {
  font-size: 20px;
  padding-right: 20px;
}

img{
    margin-top: 15px;
    width: 150px;
    height: 150px;
    margin-bottom : 15px;
    
}
.cach {
    opacity: 0;
}
.btnDelete:active::before 
{
  animation: scaleButton 0.5s ease;
}
.btnUpdate:active::before 
{
  animation: scaleButton 0.5s ease;
}
.btnDelete:hover h4
{
    opacity:0.7;
}
.btnDelete:hover i
{
    opacity:0.7;   
}
.btnDelete:hover 
{
    
    border-color: rgba(255, 0, 0, 0.5);
}

.btnUpdate:hover h4
{
    opacity:0.7;
}
.btnUpdate:hover i
{
    opacity:0.7;   
}
.btnUpdate:hover 
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