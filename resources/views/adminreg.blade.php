<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
    <link rel="stylesheet" href="fonts1/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css1/style.css">
    


</head>
<body>
<div class="main">

<section class="signup">
    <!-- <img src="images/signup-bg.jpg" alt=""> -->
    <div class="container">
        <div class="signup-content">
    <form method="post" action="/admin">
        @csrf
    
        <h2 class="form-title">Admin account</h2>
                        <div class="form-group">
    <input type="text" class="form-input"name= "name" id="name" placeholder="Your Name" value= "{{old('name')}}"><spam style="color: red">{{$errors->first('name')}}</spam><br>
</div>
<div class="form-group">
    <input type="text" name= "adminid"class="form-input" id="adminid" placeholder="Your ADMINID"  value= "{{old('adminid')}}"><spam style="color: red">{{$errors->first('adminid')}}</spam><br>
</div>
    <div class="form-group">
    <input type="password" name= "password" class="form-input" id="password" placeholder="Password" value= "{{old('password')}}"><spam style="color: red">{{$errors->first('password')}}</spam><br>
</div>
    <div class="form-group">
    <input type="password" name= "repassword" class="form-input" id="re-password" placeholder="Password" value= "{{old('re-password')}}"><spam style="color: red">{{$errors->first('re-password')}}</spam><br>
</div>
<div class="form-group">
   <input type= "submit">
</div>
</form>
<p class="loginhere">
                        Have already an account ? <a href="/adlogin" class="loginhere-link">Login here</a>
                    </p>
                    </div>
            </div>
        </section>
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>