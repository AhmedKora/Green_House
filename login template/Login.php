<?php 

session_start();

	include("connect.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$Email = $_POST['Email'];
		$password = $_POST['password'];

		if(!empty($Email) && !empty($password) && !is_numeric($Email))
		{

			//read from database
			$query = "select * from user where Email = '$Email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['Password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: ../index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log in</title>
    <link rel="stylesheet" href="./css/login.css" />
    <link rel="stylesheet" href="./css/styleAll.css" />
    <link rel="stylesheet" href="./icomoon" />
  </head>
  <body>
    <a href="index.php" class="close"><i class="icon-close"></i></a>
    <form method="POST">
      <a href="../index.php"><h1> Green House</h1></a>
      <h3>Log in</h3>
      <h3>Welcome back .</h3>
      <input type="email" placeholder="enter email" required name="Email" />
      <input type="password" placeholder="enter password" required name="password" />
      <button type="submit">Log in</button>
      <p>Dont have any accont? <a href="sginin.php">join</a></p>
    </form>
  </body>
</html>
