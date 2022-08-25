<?php
require_once "connection.php";
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location:index.php");
    exit;
}


$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM signup WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is correct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location:index.php");
                            
                        }
                        else{
                          echo'<script type="text/JavaScript">';
                          echo'alert("Enter correct Username/Password")';
                          echo'</script>';
                        }
                    }

                }

    }
}    


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--including style.css-->
     <link rel="stylesheet" href="styles.css">
    <style></style>
</head>

<body>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <div class="container">
       <div class="row">
         <div class="col-md-6 mx-auto log">
         <h2><b>Sign in</b></h2><br>
           <form action="" method="post">
             Username
             <input type="text" name="username" class="form-control" placeholder="Enter Username" required><br>
             Password
             <input type="password" name="password" class="form-control" id="pass" placeholder="Enter Password" required>
             <input type="checkbox" onclick="show()">Show password<br><br>
             <input type="submit" class="btn" name="submit" value="Sign in" style="width:100%;background-color:rgb(86, 13, 134);color:white;font-size:18px;"><br>
             <b><p style="padding-top:10px;">Don't have an account?<a class="loga"href="signup.php" style="color:rgb(86,13,134);text-decoration:none;"> Sign up.</a></p></b>
           </form>
         </div>
       </div>
     </div>
   
     <script>
    function show() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
    x.type = "text";
    } 
    else {
    x.type = "password";
    }
}
</script>
</body>
</html>