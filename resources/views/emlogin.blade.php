<!DOCTYPE html>
<html>
    <header>
        <head>
        <link rel="stylesheet" href="fonts1/material-icon/css/material-design-iconic-font.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css1/style.css">
        </head>
    <body>
    <div class="main">

<section class="signup">
    <!-- <img src="images/signup-bg.jpg" alt=""> -->
    <div class="container">
        <div class="signup-content">
        <h2 class="form-title">Login</h2>
            <form method="POST" action="/know">
                @csrf
                <div class="form-group">
                  
                    
                    <input type="text" name="employid" class="form-input" id="employid" placeholder="Your ID"  value= "{{old('employid')}}"><spam style="color: red">{{$errors->first('employid')}}</spam><br>
                </div>
                <div class="form-group">
                    
                    
                    <input type="password" name="password" class="form-input" id="password" placeholder="PASSWORD"  value= "{{old('password')}}"><spam style="color: red">{{$errors->first('password')}}</spam><br> <br>
                    <div>
                    <div class="form-group">
   <input type= "submit">
</div>
                    
                </div>
            </form>
            <p class="loginhere">
                        You don't an account ? <a href="/employ" class="loginhere-link">sign up</a>
                    </p>
                    </div>
            </div>
        </section>
        </div>
    </body>
    </header>
</html>