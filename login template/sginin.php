<?php

session_start();

include("connect.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
  //something was posted
  $First_Name = $_POST['First_Name'];
  $Last_Name = $_POST['Last_Name'];
  $Email = $_POST['Email'];
  $password = $_POST['password'];

  if(!empty($First_Name) && !empty($Last_Name) && !empty($Email) && !empty($password))
  {

    //save to database
    $user_id = random_num(20);
    $sql = "INSERT INTO `user` (`user_id`,`first_name`, `last_name`, `Email`, `password`) VALUES ('$user_id','$First_Name', '$Last_Name', '$Email', '$password')";

    mysqli_query($con, $sql);

    header("Location: login.php");
    die;
  }else
  {
    echo "Please enter some valid information!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>sgin in</title>
    <link rel="stylesheet" href="./css/styleAll.css" />
    <link rel="stylesheet" href="./css/sginin.css" />
    <link rel="stylesheet" href="./icomoon" />
  </head>
  <body>
    <a href="../index.php" class="close"><i class="icon-close"></i></a>
    <div class="flex">
      <div class="img">
        <div class="txt">
          <div>
            <h2>Creation starts here</h2>
            <p>Start gardening today </p>
          </div>
        </div>
      </div>
      <form method="post">
          <a href="../index.php"><h2>Green House</h2></a>
        <p>Already have an account? <a href="Login.php">Login</a></p>
        <input type="text" placeholder="First Name" required name="First_Name" value="" id="First_Name"/>
        <input type="text" placeholder="Last Name" required name="Last_Name" value="" id="Last_Name" />
        <input type="email" placeholder="Email address" required name="Email" value="" id="Email" />
        <input type="password" placeholder="password" required name="password" value="" id="password" />
        <button class="btn" type="submit">join</button>
      </form>
    </div>
  </body>
</html>
