
<?php require_once('server.php');?>


<?php

$username='kasun';
$password='1234';


$query = "INSERT INTO user(Name,password) values('{$username}','{$password}')";

$re=mysqli_query($connection,$query);

if($re){
echo 'recorder';
}



<!DOCYPE html>
<html>
<header>
<title>Register</title>

</header>
<body>
	<div class="container">
	
	<div class="header" >
	<h1>Register</h1>
	</div>
	
	<form action="index.php" method="post">
	
	<label>username</label>
	<input type="text" name="username">
	<label>password</label>
	<input type="password" name="password">

	<button type="submit">Submit</button>
	</form>
	
	</div>
<div></div>
</body>
</html>
?>
<?php mysqli_close($connection);?>

