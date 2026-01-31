
<?php session_start(); include "config/db.php";
if(isset($_POST['login'])){
$u=$_POST['username']; $p=$_POST['password'];
$r=$conn->query("SELECT * FROM users WHERE username='$u'");
$urow=$r->fetch_assoc();
if(password_verify($p,$urow['password'])){
if(strtotime($urow['expiry_date'])<time()) die("Expired");
$_SESSION['user']=$urow['id'];
header("Location: exam.php");
}
}
?>
<form method="post">
<input name="username"><br>
<input type="password" name="password"><br>
<button name="login">Login</button>
</form>
