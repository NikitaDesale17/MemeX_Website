<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
//if(!isset($_SESSION['loggedin ']))
{
    header("location:signin.php");
}

?>

<!--html code-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
  <!--including style.css-->
  <link rel="stylesheet" href="styles.css">
  

    <style>

  /*menubar starts*/
    .navbar-nav a{
    font-size:18px;
    color:white;
    text-transform:uppercase;
    font-weight:500;
    margin-left:15px;
    padding-top:20px;
    padding-bottom:20px;
    
  }
  
  .navbar-dark {
   background-color:rgb(80,31,126);
  }
  .navbar-dark .navbar-brand{
   color:white;
   font-size:33px;
   font-weight:700px;
   padding-top:3px;
   padding-left:15px;
  }
  .navbar-dark .navbar-brand:focus,
  .navbar-dark .navbar-brand:hover{
   color:white;

  }
  .navbar-dark .navbar-nav .navbar-link{
   color:white;
  }
  .w-100{
   height:100vh;
  }
  

  /*responsive css*/
  @media screen and(max-width:200px) {
   
   
  }   
  /*menubar ends*/        


 /*background img & text*/

 .bg-image{
 background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.4)), url(./images/niki.jpg);
 background-size: cover;
 background-position: center;
 background-repeat:no-repeat;
 height: 500px;
 position: relative;
 
 } 
 .mydesc
    {
      width: 500px;      
      color: #fff;
      padding:50px;
      position:absolute;
      top:25%;
      left:50%;
      transform: translate(-50%,-25%);
      text-align: center;
      font-size:20px;
    }
    
    /*card for what is emoji,meme,ani & download buttons*/

    .mycard
    {
      background-color:rgb(231, 235, 243);
      padding: 20px;
      text-align: center;
      margin-top: 15px;
      color:rgb(86, 13, 134);
    }

    .mycard:hover{
   box-shadow:0px 0px 20px rgb(58,5,94);
   transition:.4s;
   }
   .mycard span{
     font-size:30px;
     color:green;
     padding-right:8px;  
   }
   .mycard h3{
       text-align:center;
       color:rgb(86, 13, 134);
       padding-top:0px;

   }
   .mycard p{
      color:black;
   }

   .f {
          padding-top:15px;
          color:rgb(86, 13, 134);
        }
        .dwnld{
        background-color:rgb(80,31,126);
        border: none;
        color:white;
        text-align:center;
        padding-top:8px;
        text-decoration: none;
        display: inline-block;
        font-size:20px;
        margin-top:25px;
        cursor: pointer;
        height:80px;
        width:70%;
        border-radius:22px;
        
        }
        .dwnld:hover{
          text-decoration:none;
          background-color:white;
          color:rgb(80,31,126);;
        }

  
  
   /*about & feature 3rd div*/

    /*about*/
    .abt{
        height:350px;
        margin-top:60px;
        background-color:rgb(66,51,105);
        
          
      }
      .abt p{
       padding-left:20px;
       padding-top:15px;
       color:white;
       font-size:18px;
      }
      .abt h2{
        margin-left:20px;
        margin-top:0px;
        color:white;
      }
      .abt span{
        color:rgba(235, 219, 71, 0.976);
      }
      .abt h6{
       margin-top:20px;
       margin-left:20px;
       color:white;
      }
      h6::after
      {
       content:" ";
       display:inline-block;
       background-color:white;
       height:2px;
       width:120px;
       margin-bottom:5px; 
       }

       /*feature*/
       .abt2{
       height:350px;
       margin-top:60px; 
       background-color:rgb(193,178,236);  
       }
       .abt2 h2{
        padding-left:20px;
        margin-top:40px;
        margin-left:0px;
        color:white;
      }
      .abt2 ul{
          margin-left:0px;
          color:black;
          margin-top:0px;
      }
      .abt2 li{
          padding-left:20px;
          padding-top:10px;
          font-size:18px;
          }
          .abt2 i{
              padding-right:10px;
          }
 
     </style>
</head>

<body>

<!--bootstrap link n many more-->

  
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


  
<!--navbar starts-->
<div class="container-fluid">
    <div class="row">
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <b><a class="navbar-brand" href="#home">MemeX</a></b>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link mx-2" href="#home">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="#about">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="#explore">EXPLORE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="feed.php" target="_blank">FEEDBACK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="#" data-bs-toggle="modal" data-bs-target="#out">LOGOUT</a>
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


<!--bg img starts-->
<div class="container-fluid">
  <div class="row bg-image" id="home">
   <div col-md-12>
   <div class="mydesc">
          <div style="font-size:45px;">WLC! To MemeX </div>
          <div style="font-size:22px;">Free, Faster, Meme Downloader</div>
          <div style="font-size:17px;margin-top:10px;">Rock Your Videos With Animations</div>
        </div>  
   </div>
</div>
</div>
<!--bg img ends-->
    

 <!--what is meme,animaton,emoji starts-->
<div class="container">
    <div class="row pt-5 pb-5">
      <div class="col-md-4 col-sm-6">
        <div class="mycard">
        <h3><span>&check;</span> WHAT IS MEME?</h3>
           <p>A MEME is an idea, behavior, or style that spreads by means of imitation from person to person
              within a culture and often carries symbolic meaning representing a particular phenomenon or theme.</p>
        </div>

      </div>
      <div class="col-md-4 col-sm-6">
        <div class="mycard">
        <h3><span>&check;</span> WHAT IS EMOJI?</h3>
           <p>An emoji is a small icon used to represent an emotion, symbol or object.Emoji commonly appear in communication applications, such as social networking apps and text messaging systems. </p>

      </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="mycard">
        <h3><span>&check;</span> WHAT IS AN ANIMATION?</h3>
           <p>Animation video is a technique in which images go through the process of designing to create an illusion of action.Make for an interesting story-telling experience.</p>
      </div>
      </div>
    </div>
  </div>
<!--what is meme,animaton,emoji ends-->

    
    <!--about & feature starts-->
    <div class="row">
      <div class="col-md-6 col-sm-12 abt" id="about">
          <h6>ABOUT</h6>
          <h2><b>ABOUT MemeX</b></h2>
          <p>MemeX is a whole ground of the social media, where we have all types of <span>Meme</span> such as funny, laughing, crying, and many more trending memes. MemeX include the many more <span>video animations</span> as well, that you can be use them in your video creation. Lastly MemeX have the meaning of <span>emojis</span> on a single platform.</p>
      </div>

      <div class="col-md-6 col-sm-12 abt2">
            <h2><b>FEATURES</b></h2>
         <ul>
         <li><i style='font-size:15px' class='fas'>&#xf08d;</i>Memes, Animations, Emoji meaning on single platform</li>
         <li><i style='font-size:15px' class='fas'>&#xf08d;</i>Free, Faster, and Easy download</li>
         <li><i style='font-size:15px' class='fas'>&#xf08d;</i>Download the Memes for free</li>
         <li><i style='font-size:15px' class='fas'>&#xf08d;</i>Download the Animations for free</li>
         <li><i style='font-size:15px' class='fas'>&#xf08d;</i>Know the meaning of various Emojis</li>
        </ul>
      </div>
    </div>
   <!--about & feature ends-->

  <!--explore starts-->

  <div class="container" id="explore">
    <div class="row pt-5 pb-5">
      <div class="col-md-4 col-sm-6">
        <div class="mycard">
        <center><i style='font-size:24px' class='fas f'>&#128518;</i></center>
        <center><a href="meme.php"  class="dwnld" target="_blank">Download Memes</a></center>
      </div>

      </div>
      <div class="col-md-4 col-sm-6">
        <div class="mycard">
        <center><i style='font-size:24px' class='far f'>&#128525;</i></center>
         <center><a href="animation.php"  class="dwnld" target="_blank">Download Animations</a></center>
      </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="mycard">
        <center><i style='font-size:24px' class='fas f'>&#128515;</i></center>
        <center><a href="emoji.php"  class="dwnld" target="_blank">Emojis Meaning</a></center>
      </div>
      </div>
    </div>
  </div>

  <!--explore ends-->
   


    <!--copyright-->
    <div class="cprt">
       <h4>Copyright &copy 2022</h4>
    </div> 

    <!--space-->
    <div class="space"></div>
    
</body>
</html>