<?php
include("functions.php");
?>
<title>Hello!</title>
<pre>
<?php
if(isset($_SESSION['login'])){
?>
<h1> Welcome Admin :D</h1><h2><a href="logout.php">Logout!</a></h2>
<?php
}else{
?>
<h1> Please login first!</h1>
<form action="login.php" method="POST">
Username : <input type="text" name="username">
Password : <input type="password" name="password">

		   <input type="submit" name="login" value="Login">
</form>
<?php
}
?>
</pre>