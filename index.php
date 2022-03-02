<?php 
include("db_connect_Login.php");
 session_start();
 error_reporting(0);
$_SESSION["loggedIn"] =0;
	
	$error=$uname=$pass=""; $count = 0;
	


if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if(empty($_POST["username"]) || empty($_POST["pass"])){
		$error = "Please Enter All the Fields !";}
	
	
	else{
		$pass = $_POST["pass"];
		$uname =$_POST["username"];
	
	
	$sql = "SELECT userName FROM login_info WHERE userName = 'Sheldon' AND pass= 'bang' ";
	$match = mysqli_query($link, $sql);
	$count = mysqli_num_rows($match);
	
	if($count == 1){
		$_SESSION["user"] = $_POST["username"];
		$_SESSION["loggedIn"] = 1;
		header("Location: front1.php", true, 301);
	}
	
		else
		$error = "Invalid Password or Username";
}
}

function lr($lrsrt){

	return strtolower($lrsrt);
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel = "stylesheet" href= "BootStrap/css/bootstrap.min.css">

	<title>Login VMS</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-weight: 800; font-size: 3rem;">Login</p>
			<div class="input-group">
				<input type="username" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="pass" value="<?php echo $_POST['pass']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
		</form>
	</div>
</body>
</html>