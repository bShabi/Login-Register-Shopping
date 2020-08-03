<?PHP
session_start();

define("HOST","localhost");
define("USER","root");
define ("PASS","Password");
define("DB","Amazon");
if ($_SERVER["REQUEST_METHOD"] == "GET") { // If he did not come from the form
    print "ERROR !!! :( <br> Fill the form !";
    header('Refresh:3; url=index9.php');
    exit();
}
if(isset($_POST['register'])) {
	$erros = array();
	$user=$_POST['username'];
	$email=$_POST['email'];
	$pass=$_POST['password_1'];
	if(empty($user))
	{
		echo  "Please enter username";
		exit();
	}
	if(empty($email))
	{
		echo  "Please enter Email";
		exit();
	}
	if(empty($pass))
	{
		echo  "Please enter Password";
		exit();
	}
	//Currently Details here
	$con=mysqli_connect(HOST,USER,PASS,DB);
	mysqli_set_charset($con,"utf8");
	$query = mysqli_query($con, "INSERT INTO Users(user,password,email) VALUES('$user','$pass','$email')");
	//$rows = mysqli_num_rows($query);
	if($query)
	{
		echo "Register Success".$user;
		header('Refresh:3; url=login.php');
		exit();
	}
	else
	{
		echo "Error";
		header('Refresh:3; url=register.php');
		exit();
	}



	//echo "Success!";
	//header('Refresh:3; url=index10.php');
	exit();
}
if(isset($_POST['login'])) {
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$con=mysqli_connect(HOST,USER,PASS,DB);
	mysqli_set_charset($con,"utf8");
	$query = mysqli_query($con, "SELECT * FROM `Users` WHERE user='$user' and password='$pass'");
	$rows = mysqli_num_rows($query);
	if($rows==1)
	{
		echo "Hello ".$user;
		header('Refresh:3; url=shopping.php');
		exit();
	}
	else
	{
		echo "error";
		header('Refresh:3; url=register.php');
		exit();

	}
	echo "</table>";
	mysqli_close($con);
}



?>


