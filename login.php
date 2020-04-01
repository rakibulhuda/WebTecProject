<?php

	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$err_invalid="";
	$has_error=false;

	if(isset($_POST['submit']))
	{
		if(empty($_POST['uname']))
		{
			$err_uname="*Username Required";
			$has_error=true;

		}
		else
		{
			$uname=$_POST['uname'];
		}
		if(empty($_POST['pass']))
		{
			$err_pass="*Password Required";
			$has_error=true;

		}
		else
		{
			$pass=$_POST['pass'];
		}

		if(!$has_error)
		{
			if($uname == "admin" && $pass=="123")
			{
				//session_start();
				setcookie("loggedinuser",$uname,time()+60);
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:index.php");
			}
			else
			{
				$err_invalid="Invalid Username Password";
				//echo $err_invalid;
			}
		}

	}
	if(isset($_POST['submit']))
	{
		if(empty($_POST['uname']))
		{
			$err_uname="*Username Required";
			$has_error=true;

		}
		else
		{
			$uname=$_POST['uname'];
		}
		if(empty($_POST['pass']))
		{
			$err_pass="*Password Required";
			$has_error=true;

		}
		else
		{
			$pass=$_POST['pass'];
		}

		if(!$has_error)
		{
			if($uname == "user" && $pass=="1234")
			{
				//session_start();
				//setcookie("loggedinuser",$uname,time()+60);
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:index.php");
			}
			else
			{
				$err_invalid="Invalid Username Password";
				//echo $err_invalid;
			}
		}

	}

	if(isset($_POST['submit']))
	{
		if(empty($_POST['uname']))
		{
			$err_uname="*Username Required";
			$has_error=true;

		}
		else
		{
			$uname=$_POST['uname'];
		}
		if(empty($_POST['pass']))
		{
			$err_pass="*Password Required";
			$has_error=true;

		}
		else
		{
			$pass=$_POST['pass'];
		}



	}
?>

<html>
	<head><title>Login</title></head>
	<body>
		<h1 style="color: white;text-align: center;">Login</h1>
		<span><?php echo $err_invalid;?></span>
		<form method="post" action="" align="center">
			 <div class="row">
    <div class="col-25">
      <label>User Name: </label>
    </div>
    <div class="col-75">
      <input type="text" value="<?php echo $uname;?>" name="uname">
						<br><span class="error"><?php echo $err_uname;?></span>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Password: </label>
    </div>
    <div class="col-75">
     <input class="pass" type="password" value="<?php echo $pass;?>" name="pass">
					<br><span class="error"><?php echo $err_pass;?></span></span>
    </div>
  </div>
  <div class="row">
	<input type="submit" value="LOGIN" name="submit">
  </div>
		</form>

	</body>
</html>
