<?php 

$username="admin";
$password="admin";

session_start();

if (isset($_SESSION['uname'])) {
	echo "<h1> Welcome ".$_SESSION['uname']."</h2>";
	echo "<a href='product.php'>Product</a><br>";
	echo "<br><a href='logout.php'>Logout</a><br>";

}
else{
	if ($_POST['uname']==$username && $_POST['pass']==$password) {
		$_SESSION['uname'] = $username;
		echo "<script>location.href='welcome.php'</script>";
	}
	else{
		echo "<script>alert(uname or pass incorrect!)</script>";
		echo "<script>location.href='login.php'</script>";
	}
}

 ?>