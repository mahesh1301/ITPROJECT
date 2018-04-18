<?php include('config.php');
	
	session_start();
	$sect=$_SESSION['sec'];
	$_SESSION['id']=$sect;
	if(isset($_POST['password']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
	}
	
	$sql = "select password from login where name = '$username'";
	$result = mysqli_query($conn, $sql) or die ("Error");
	
	$row = mysqli_fetch_assoc($result);
	
	
	
	if($row['password']==$password)
	{
		$_SESSION['user'] = $username;
		header('Location:votelist.php');
	}
	else
	{
		header('Location:index.php');
	}

	mysqli_close($conn);

?>

//hello kjlaAKDJVbaigfaoeihgwerobv"QEIOPFHYVab :SOEFH'?pwfhyvW'OQIGFT8agb
