<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!--including style.css-->
    <link rel="stylesheet" href="styles.css">
   <style>
  

   </style>
</head>

<body>
    <!--bootsrap links-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


    

<!--navbar starts-->
<div class="container-fluid">
    <div class="row">
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <b><a class="navbar-brand" href="#">MemeX</a></b>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link mx-2" href="index.php#home" target="_blank">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="index.php#about" target="_blank">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="index.php#explore" target="_blank">EXPLORE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="feed.php" target="_blank">FEEDBACK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="#" data-bs-toggle="modal" data-bs-target="#out" >LOGOUT</a>
        </li>
      </ul>
</div>
</div>
 </nav>
</div>
</div>
<!--navbar ends-->
<!--logout modal starts-->
<div class="modal fade" id="out" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:rgb(80,31,126);">LOGOUT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="font-size:20px;">
        Are You Sure To Exit ?
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn" style="background-color:rgb(80,31,126);" data-bs-dismiss="modal"><a href="#" style="text-decoration:none;color:white;">NO</a></button>
        <button type="button" class="btn" style="background-color:rgb(80,31,126);"><a href="logout.php" style="text-decoration:none;color:white;">YES</a></button>
      </div>
    </div>
  </div>
</div>
<!--logout modal ends-->


<!--index-->
<center>
<div class="index2">
    <h2>HD ANIMATIONS</h2> 
  <a href="#subscribe" class="bcontent2" target="_blank">Subscribe</a>
  <a href="#water" class="content2" target="_blank">River</a>
  <a href="#grass" class="content2" target="_blank">Grass</a>
  <a href="#rain" class="content2" target="_blank">Rain</a>
  <a href="#bird" class="content2" target="_blank">Birds</a>
  <a href="#city" class="content2" target="_blank">City</a>
  <a href="#bike" class="content2" target="_blank">Bike</a>
  <a href="#windmill" class="bcontent2" target="_blank">Windmill</a>
  <a href="#mm" class="bcontent2" target="_blank">Multimedia</a>
  <a href="#night" class="content2" target="_blank">Night</a>
  <a href="#flower" class="content2" target="_blank">Flower</a>
  </div>
</center>

<!--flower-->
<div id="flower">
<center><h3 style="color:rgb(86,13,134);padding-top:10px;">FLOWER</h3></center><br>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/f1.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/f2.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/f3.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/f4.mp4" type="video/mp4">
</video>
</div>

<!--bike-->
<div id="bike">
<center><h3 style="color:rgb(86,13,134);padding-top:10px;">BIKE</h3></center><br>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/bk1.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/bk2.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/bk3.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/bk4.mp4" type="video/mp4">
</video>
</div>

<!--city-->
<div id="city">
<center><h3 style="color:rgb(86,13,134);padding-top:10px;">CITY</h3></center><br>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/c1.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/c2.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/c3.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/c4.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/c5.mp4" type="video/mp4">
</video>
</div>

<!--grass-->
<div id="grass">
<center><h3 style="color:rgb(86,13,134);padding-top:10px;">GRASS</h3></center><br>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/g1.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/g2.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/g3.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/g4.mp4" type="video/mp4">
</video>
</div>


<!--rain-->
<div id="rain">
<center><h3 style="color:rgb(86,13,134);padding-top:10px;">RAIN</h3></center><br>
<video width="320" height="240"style="margin-left:45px;" controls>
  <source src="./meme/r1.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/r2.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/r3.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/r4.mp4" type="video/mp4">
</video>
</div>

<!--windmill-->
<div id="windmill">
<center><h3 style="color:rgb(86,13,134);padding-top:10px;">WINDMILL</h3></center><br>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/wm1.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/wm2.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/wm3.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/wm4.mp4" type="video/mp4">
</video>
</div>

<!--water-->
<div id="water">
<center><h3 style="color:rgb(86,13,134);padding-top:10px;">RIVER</h3></center><br>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/w1.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/w2.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/w3.mp4" type="video/mp4">
</video>
</div>

<!--subscribe-->
<div id="subscribe">
<center><h3 style="color:rgb(86,13,134);padding-top:10px;">SUBSCRIBE</h3></center><br>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/subscribe1.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/subscribe2.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/subscribe3.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/subscribe4.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/subscribe5.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/subscribe7.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/subscribe8.mp4" type="video/mp4">
</video>
</div>

<!--multimedia-->
<div id="mm">
<center><h3 style="color:rgb(86,13,134);padding-top:10px;">MULTIMEDIA</h3></center><br>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/s1.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/s2.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/s3.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/s4.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/s5.mp4" type="video/mp4">
</video>
</div>


<!--night-->
<div id="night">
<center><h3 style="color:rgb(86,13,134);padding-top:10px;">NIGHT</h3></center><br>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/n1.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/n2.mp4" type="video/mp4">
</video>
</div>

<!--birds-->
<div id="bird">
<center><h3 style="color:rgb(86,13,134);padding-top:10px;">BIRDS</h3></center><br>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/b1.mp4" type="video/mp4">
</video>
<video width="320" height="240"style="margin-left:15px;" controls>
  <source src="./meme/b2.mp4" type="video/mp4">
</video>
</div>

<!--space-->
<div class="space"></div>
</body>
</html>