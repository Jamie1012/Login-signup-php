<?php 
session_start();

if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    //Yeah! Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome <?= $first_name.' '.$last_name ?></title>
  <?php include 'css/css.html'; ?>
  <style>
    lumn-width: 250px;
height: 600px;
column-gap: 20px;
}

.card {
margin-left: auto;
margin-right: auto;
}

* {
box-sizing: border-box;
color: black; 
}
.column {
float: left;
width: 25%;
padding: 10px;
height: 300px;
}
.row:after {
content: "";
display: table;
clear: both;
}
p{
 color: black; 
}

  </style>
</head>

<body style="background:url(https://www.freevector.com/uploads/vector/preview/30353/Beautiful_Pastel_Background_1.jpg);" >
 
<h2 style="margin-top: 40px;">Welcome <?php echo $first_name.' '.$last_name; ?> , </h2>
          <h2></h2>

  <div style="padding-top:50px; color:black;">
          
          <p>
          <?php 
     
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];
              
              unset( $_SESSION['message'] );
          }
          
          ?>
          </p>
          
          <?php
          
          //Yeah! Keep reminding the user this account is not active, until they activate
        
          ?>
          <h1 style="font-family: Courier, monospace; margin-left: 5%;margin-right: auto; text-shadow: 2px 2px #ffffff; font-weight: bolder;">INTERNET WEB PROGRAMMING </h1>
<div style="margin-right: 5%; margin-left: 5%;margin-bottom: 10%; background-color:#e8deff;">
<div class="column" >
<h2> HTML</h2>
<p >
The HyperText Markup Language, or HTML is the standard markup language for
documents designed to be displayed in a web browser. It can be assisted by
technologies such as Cascading Style Sheets (CSS) and scripting languages such as
JavaScript.
</p>
</div>
<div class="column" >
<h2>CSS</h2>
<p>
Cascading Style Sheets (CSS) is a style sheet language used for describing the
presentation of a document written in a markup language such as HTML.[1] CSS is a
cornerstone technology of the World Wide Web, alongside HTML and JavaScript.[2]
</p>
</div>
<div class="column" >
<h2>JAVASCRIPT</h2>
<p>
JavaScript (JS) is a lightweight, interpreted, or just-in-time compiled programming
language with first-class functions. While it is most well-known as the scripting
language for Web pages, many non-browser environments also use it, such as Node.js,
Apache CouchDB and Adobe Acrobat.
</p>
</div>
<div class="column" >
<h2>PHP</h2>
<p>
PHP is a general-purpose scripting language geared towards web development.[7]
It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994.[8] The
PHP reference implementation is now produced by The PHP Group.[9]
</p>
</div>
</div>
<div class="row">
<div class="column" style="background-color:#9b6dff;">
<h2> HTML</h2>
<img style="width: 200px; height: 200px;"
src="https://www.freeiconspng.com/uploads/html5-icon-2.png" alt="">
</div>
<div class="column" style="background: color #b99aff;">
<h2>CSS</h2>
<img style="width: 200px; height: 200px;"
src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_2dfsPeW1sL0lDikNWEnlRvo1-k-KtEVp39aUTc9hzzDlbgj-ZhxRVXkK2p1tGCevIkY&usqp=CAU" alt="">
</div>
<div class="column" style="background-color:#d8c7ff;">
<h2>JAVASCRIPT</h2>
<img style="width: 200px; height: 200px;" src="https://www.pngitem.com/pimgs/m/171-1718042_javascript-logo-png-transparent-png.png" alt="">
</div>
<div class="column" style="background-color:#e8deff;">
<h2>PHP</h2>
    <img style="width: 200px; height: 200px;"src="https://png.pngitem.com/pimgs/s/174-1747814_php-logo-programmer-computer-software-elephant-php-logo.png" alt="">
          </div>
</div>
<div style="margin-right: 20%; margin-left: 20%; background-color: #ccc; margin-top: 10%; padding: 20px 20px;" >
       <iframe width="560" height="315" src="https://www.youtube.com/embed/W6NZfCO5SIk" title="YouTube video player"frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<br>
<div style="margin-right: 20%; margin-left: 20%; background-color: #ccc; margin-top: 10%; padding: 20px 20px;" >

     <iframe style="padding: 20px 20px;" width="560"  height="315" src="https://www.youtube.com/embed/OK_JCtrrv-c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
<br> 
          
          <a href="logout.php"><button class="button button-block" name="logout" style="width:50%; margin-top: 40px; border-radius: 15px; margin-right:auto; margin-left:auto">Log Out</button></a>

    </div>
    <br>
    <br>
    <br>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src="js/index.js"></script>

</body>
</html>
