<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title ?? 'FUTSAL'}}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('dist/css/font-awesome.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <style type="text/css">
        body {
            background-color: #FFF;

        }

        .login-page,
        .register-page {
            background-color: #FFF;
            background-image: url("{{asset('images/freetrial_light_hexes_v1.svg')}}");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: left bottom;
        }

        .login-box-body,
        .register-box-body {
            border: 1px solid #ccc;
            box-shadow: 0px 3px 36px -6px rgba(0, 0, 0, 0.75);
            border-radius: 4px !important;
        }

        .login-box,
        .register-box {
            margin: 1% auto;
        }

        #forgot_password {
            color: #666;
        }

        button[type=submit] {
            border-radius: 4px !important;
        }

        .btn-danger:hover {
            border-color: transparent !important;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div  class="box box-primary">
        <div class="login-logo"
            <a href="{{url('/')}}">FUTSALS</a>
        </div>

        <!-- /.login-logo -->
       <div class="box-body">
        
            <form action={{URL::to('/register')}} method="post">

<div class="row"> 
     <div class="col-sm-12">
        <label class="control-label col-sm-2" for="name">VAT Registered:</label>
          <input type="radio" name="vat_status" id="vat_status" value="1" onclick="vatYesNo(1)" required=""> Yes
                <input type="radio" name="vat_status" id="vat_status0" value="2" onclick="vatYesNo(0)"> No
    </div>
    </br></br></br>
   
    <div class="col-sm-6">
    <label class="control-label col-sm-2" for="name">Company Name:</label>
     <input type="text" name="companyname" placeholder="Enter name" required class="form-control">
    </div>
     <div class="col-sm-6">
        <label class="control-label col-sm-2" for="name">Trading Name:</label>
         <input type="text" name="tradingname" placeholder="Enter name" required class="form-control">
    </div>
 </br></br></br> </br>
    

    <div class="col-sm-6">
    <label class="control-label col-sm-2" for="name">Street Address:</label>
     <input type="text" name="streetaddress" placeholder="Enter name" required class="form-control">
    </div>

     <div class="col-sm-6">
        <label class="control-label col-sm-2" for="name">Email: </label>
         <input type="text" name="email" placeholder="Enter name" required class="form-control">
    </div>



    </br></br></br> </br>
    

    <div class="col-sm-6">
    <label class="control-label col-sm-2" for="name">Contact office No</label>
     <input type="text" name="officeno" placeholder="Enter name" required class="form-control">
    </div>
      <div class="col-sm-6">
        <label class="control-label col-sm-2" for="name">contact Person: </label>
         <input type="text" name="cperson" placeholder="Enter name" required class="form-control">
    </div>

    </br></br></br> </br>
   
     <div class="col-sm-6">
        <label class="control-label col-sm-2" for="name">contact Person No: </label>
         <input type="text" name="cpersonnumber" placeholder="Enter name" required class="form-control">
    </div>
     <div class="col-sm-6">
    <label class="control-label col-sm-2" for="name">BRN</label>
     <input type="text" name="brn" placeholder="Enter name" required class="form-control">
    </div>

   

      </br></br></br> </br>
     <div class="col-sm-6">
        <label class="control-label col-sm-2" for="name">Attach latest BRN Documents </label>
         <input type="file" name="att_brn" id="att_brn" accept="application/pdf,image/*">
    </div>

    <div class="col-sm-6">
    <label class="control-label col-sm-4" for="name">Attach Trading License Document</label>
    <input type="file" name="att_trading" id="att_trading" accept="application/pdf,image/*">
    </div>
    </br></br></br> </br>
<div class="col-sm-12">
<button type="submit" class="btn btn-danger btn-block btn-flat" style="width:auto; align:center;">Save</button>
</div>

<div>

              
    </form>      

    </div>

    <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
     

    <!-- jQuery 2.2.0 -->
    <script src="{{asset('plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>
</body>

</html>
