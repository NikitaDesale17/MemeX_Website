<?php
 if(isset($_POST['submit']))
 {
    $mailto="nikitadesale17@gmail.com"; //my email

    //user feddback
    $fromemail=$_POST['email']; //user email
    $subject="Feedback!"; //user subject

    //subject to client
    $subject2="Feedback submitted successfully !!";

    //email body from client to me
    $message="User email: " . $fromemail . "\n"
            . "Feedback: " . $_POST['feedback'];

    //email body from me to user
    $message2="Dear " . $fromemail . "\n"
            . "Thank you for submitting your feedback !!" . "\n\n"
            . "Regards," . "\n" . "MemeX";

    $headers= "From: " .$fromemail; //client email I will receive
    $headers2= "From: " .$mailto; // my email receive by user

    //php mailer function
    $result1= mail($mailto, $subject, $message, $headers); //mail to me
    $result2= mail($fromemail, $subject2, $message2, $headers2); //mail to user

    if($result1 && $result2){
      echo'<script type="text/JavaScript">';
      echo'alert("Thanks! your feedback has submitted successfully!")';
      echo'</script>';
    }
    else{
      echo'<script type="text/JavaScript">';
      echo'alert("Try again! Something went wrong.")';
      echo'</script>';
    }


 }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <!--including style.css-->
    <link rel="stylesheet" href="styles.css">
    <style>
      @media screen and (max-width:811px)
      {
        /*for feedback feed.php*/
      .feedh h1{
        font-size:25px;
        padding-left:45px;
        padding-top:130px;
        line-height:50px;
        
}
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
    <b><a class="navbar-brand" href="">MemeX</a></b>
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


   <!--feedback-->
   
   <div class="row">
     <div class="alert">Let us know your feedback,<span style="color:rgba(235, 219, 71, 0.976);"> Do fill this form.</span></div>
      <div class="col-6 feedh" id="feedback">
      <h1 style="width:100%;"><b>Let Us<br>Know Your<br>Feedback !</b></h1>
      </div>
      <div class="col-6 feed">
          <form action="" method="post">
             Email<br>
            <input type="text" name="email"  placeholder="Your Email" style="width:80%;height:50px;border-radius:8px;color:black;"><br><br>
             Feedback<br>
            <input type="text" name="feedback" style="width:80%;height:150px;border-radius:8px;color:black;" placeholder="Your Feedback"><br><br>
            <input type="submit" name="submit" class="btn" style="width:80%;background-color:white;border-radius:5px;" name="submit">
          </form>
      </div>
    </div> 
   
    <!--space-->
    <div class="space"></div>
</body>
</html>