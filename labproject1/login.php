<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" >
<link rel="stylesheet" href="style.css" >
</head>
<style>
body{
    background: #e5e8ea;
}
.login_form{
    margin-top: 25%;
    background: #fff;
    padding: 30px;
    box-shadow: 0px 1 px 36px 5px rgb(0,0,0,0.28);
    border-radius: 5px;
}

.form_btn{ 
    background: #5C4033;
   box-shadow: 0 1px 2px 0 rgba(0,0,0,.2);
   border: none;
   color: #fff; 
   width: 100% 
 }

 .label_txt{ 
    font-size: 12px; 
       }  

       .errmsg{ 
    margin: 2px auto;
    border-radius: 5px;
    border: 1px solid red;
    background: pink;
    text-align: left;
    color: brown;
    padding: 1px;
  }
  
</style>
<body>
    <div class="container">
    <div class ="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">
        <div class="login_form"> 
            <img src="pic3.jpg" alt="I-Notes" class="logo img-fluid">


  <?php 
    if(isset($_GET['loginerror'])) {
	  $loginerror=$_GET['loginerror'];
    }
    if(!empty($loginerror)){  echo '<p class="errmsg">Invalid login credentials, Please Try Again..</p>'; } ?>



  <form action="login_process.php" method="POST">
  <div class="form-group">
    <label class="label_txt">Username or Email address</label>
    <input type="text" name="login_var" value="<?php if(!empty($loginerror)){ echo  $loginerror; } ?>"  class="form-control"  placeholder="Enter username or email">
    
  </div>
  <div class="form-group">
    <label  class="label_txt">Password</label>
    <input type="password" name="password" class="form-control"  placeholder="Enter Password">
  </div>

  <button type="submit"  name="sublogin" class="form_btn btn btn-primary">Login</button>
</form>
<p style="font-size: 12px;text-align: center;margin-top: 10px; color: #00376b;">Forgot Password? </p>
   <br> 
    <p>Don't have an account? <a href="signup.php">Sign up</a> </p>
	
</div>

        </div>
        <div class="col-sm-4">

        </div>
</div>
</div>        
    
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" ></script>
</html>