<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="descriptison">
<meta content="" name="keywords">
<title>Rent Management System</title>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link href="assets/DataTables/datatables.min.css" rel="stylesheet">
  <link href="assets/css/jquery.datetimepicker.min.css" rel="stylesheet">
  <link href="assets/css/select2.min.css" rel="stylesheet">
</head>
<style>
    body{
        width: 100%;
        height: calc(100%);
        /*background: #007bff;*/
    }
    main#main{
        width:100%;
        height: calc(100%);
        background:white;
    }
    #login-right{
        position: absolute;
        right:0;
        width:40%;
        height: calc(100%);
        background:white;
        display: flex;
        align-items: center;
    }
    #login-left{
        position: absolute;
        left:0;
        width:60%;
        height: calc(100%);
        background:#59b6ec61;
        display: flex;
        align-items: center;
        background: url(image/nigth1.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    #login-right .card{
        margin: auto;
        z-index: 1
    }
    .logo {
    margin: auto;
    font-size: 8rem;
    background: white;
    padding: .5em 0.7em;
    border-radius: 50% 50%;
    color: #000000b3;
    z-index: 10;
}
div#login-right::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: calc(100%);
    height: calc(100%);
    background: #183D3D;
}
.link a:hover, a:active {
  background-color: none;
}
.link a:link, a:visited {
  background-color: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}


</style>

<body>


  <main id="main" class=" bg-light">
        <div id="login-left" class="bg-dark">
        </div>

        <div id="login-right" class="bg-light">
            <div class="w-100">
            <h4 class="text-white text-center"><b></b></h4>
            <br>
            <br>
            <div class="card col-md-8">
                <div class="card-body">
                    <form id="login-form" >
                        <center><img src="image/hotel.png" alt="Logo" width="100" height="100"></center>
                        <div class="form-group">
                            <label for="username" class="control-label">Username</label>
                            <input type="text" id="username" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                        <div class="link">
                        <center><button class="btn-sm btn-block btn-wave col-md-4 btn-success"><a href="index.php">Login</a></button></center><br><center>Hello Landlord, welcome back!!!</center>
                    </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
   
</body>
</html>
