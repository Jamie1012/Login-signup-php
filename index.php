<!--A Code To Creaet Production
    Account creation and Login Process
 -->
<!--**************************************--> 

<?php 
/* Main page with two forms: sign up and log in */
require 'db.php'; //read from the database
session_start(); 
?>
<!DOCTYPE html> 
<html>
<head>
  <title>Signup - Login</title>
  <?php include 'css/css.html'; ?>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>
<body style="background-image:
url(https://cdn.mwallpapers.com/photos/celebrities/artist/material-design-social-android-iphone-hd-wallpaper-background-downloadhd-wallpapers-desktop-background-android-iphone-1080p-4k-zaiuv.jpg); margin-right: 550px;">

 
  
  

     <div style="margin-top:150px; " class="form">    
      <ul class="tab-group">
        <li class="tab"><a style="font: 500 1rem 'Quicksand', sans-serif;" href="#signup">Sign Up</a></li>
        <li class="tab active"><a style="font: 500 1rem 'Quicksand', sans-serif;" href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
     
      <!--Start Login Form--> 
      <div id="login">   
      <h1 style="font: 900 1rem  padding: 10px;margin-top:20px;" >WELCOME!</h1>

        <!--Launching Login Form-->
        <form action="index.php" method="post" autocomplete="off">
          <div class="field-wrap">
            <label>
              <span class="req">*</span>
            </label>
            </label>
            <input   type="email" required autocomplete="off" name="email" placeholder="Email Address">
          </div>
          
          <div class="field-wrap">
            <label>
             <span class="req">*</span>
            </label>
            <input style="font: 500 1rem 'Quicksand', sans-serif;" type="password" required autocomplete="off" name="password" placeholder=" Password" />
          </div>
          
          <p class="forgot"><a style="font: 500 1rem 'Quicksand', sans-serif; text-decoration: none;" href="forgot.php">Forgot Password?</a></p>
          
          <button class="button button-block" name="login" style="font: 500 1rem 'Quicksand', sans-serif;">Log In</button>

        </form>
        <!--Terminating Login Form-->

        </div>
        <!--End Login Form--> 
        <div id="signup">   
          <h1  style="font: 900 1rem  padding: 10px;margin-top:20px;">Create an account</h1>
        
        <!--Launching SignUp Form--> 
        <form action="index.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <input  style="font: 500 1rem 'Quicksand', sans-serif;"   type="text" required autocomplete="off" name='firstname' placeholder="First Name" />
          </div>
        
          <div class="field-wrap">
              <input style="font: 500 1rem 'Quicksand', sans-serif;"  type="text"required autocomplete="off" name='lastname' placeholder="Last Name" />
            </div>
          </div>

          <div class="field-wrap">
            <input  style="font: 500 1rem 'Quicksand', sans-serif;"   type="email"required autocomplete="off" name='email' placement="Email Address" placeholder="Email Address" />
          </div>
          
          <div class="field-wrap">
            <input style="font: 500 1rem 'Quicksand', sans-serif;" type="password"required autocomplete="off" name='password' placeholder="Set A Password" />
          </div>
          
          <button type="submit" class="button button-block" name="register" >Create</button>
          
        </form>
        <!--Terminating SignUp Form--> 
        
        </div> 
        <!--End SignUp Form--> 

        
      </div><!-- tab-content -->
      
  </div> <!-- /form -->


    </div>

  <!--Load Cloudflare jquery.min.js online-->   
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <!--Load index.js from the resource folder--> 
  <script src="js/index.js"></script>


</body>
</html>
