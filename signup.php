
<?php include "config/db.php";
if(isset($_POST['signup'])){
$name=$_POST['name'];
$u=$_POST['username'];
$p=password_hash($_POST['password'],PASSWORD_DEFAULT);
$d=$_POST['days'];
$exp=date('Y-m-d',strtotime("+$d days"));
$conn->query("INSERT INTO users(name,username,password,expiry_date)
VALUES('$name','$u','$p','$exp')");
header("Location: login.php");
}
?>
<form method="post">
<input name="name" placeholder="Name"><br>
<input name="username" placeholder="Username"><br>
<input type="password" name="password"><br>
<select name="days"><option value="7">7</option><option value="30">30</option></select><br>
<button name="signup">Signup</button>
</form>
