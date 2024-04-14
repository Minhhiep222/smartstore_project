<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('styles4.css') }}" rel="stylesheet">
</head>


<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div id="second">
                    <div class="myform form ">
                        <div class="logo mb-3">
                            <div class="col-md-12 text-center">
                                <h1>Signup</h1>
                            </div>
                        </div>
                        <form action="#" name="registration">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tài Khoản</label>
                                <input type="text" name="UserName" class="form-control" id="username"
                                    aria-describedby="emailHelp" placeholder="Tài khoản đăng nhập">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Địa chỉ email</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    aria-describedby="emailHelp" placeholder="Nhập email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mật Khẩu</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    aria-describedby="emailHelp" placeholder="Nhập Mật Khẩu">
                            </div>
                            <div class="col-md-12 text-center mb-3">
                                <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Sign In</button>
                            </div>
                            <div class="form-check form-group">
                                <label for="exampleInputEmail1">Người Bán</label>
                                <input type="checkbox" name="seller" id="email" aria-describedby="emailHelp"
                                    placeholder="">
                            </div>
                            <div class="form-account col-md-12 ">
                                <div class="form-group">
                                    <p class="text-center"><a href="http://127.0.0.1:8000/Login" id="signin">Already
                                            have an account?</a></p>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script>
    // $("#signup").click(function() {
    // $("#first").fadeOut("fast", function() {
    // $("#second").fadeIn("fast");
    // });
    // });

    // $("#signin").click(function() {
    // $("#second").fadeOut("fast", function() {
    // $("#first").fadeIn("fast");
    // });
    // });



    // $(function() {
    //   $("form[name='login']").validate({
    //     rules: {

    //       email: {
    //         required: true,
    //         email: true
    //       },
    //       password: {
    //         required: true,

    //       }
    //     },
    //      messages: {
    //       email: "Please enter a valid email address",

    //       password: {
    //         required: "Please enter password",

    //       }

    //     },
    //     submitHandler: function(form) {
    //       form.submit();
    //     }
    //   });
    // });



    // $(function() {

    // $("form[name='registration']").validate({
    // rules: {
    // firstname: "required",
    // lastname: "required",
    // email: {
    // required: true,
    // email: true
    // },
    // password: {
    // required: true,
    // minlength: 5
    // }
    // },

    // messages: {
    // firstname: "Please enter your firstname",
    // lastname: "Please enter your lastname",
    // password: {
    // required: "Please provide a password",
    // minlength: "Your password must be at least 5 characters long"
    // },
    // email: "Please enter a valid email address"
    // },

    // submitHandler: function(form) {
    // form.submit();
    // }
    // });
    // });
    </script>
</body>

</html>