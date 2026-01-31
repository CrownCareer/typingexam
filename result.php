
<?php session_start(); include "config/db.php";
$u=$_SESSION['user'];
$t=$_GET['typed']; $c=$_GET['correct']; $w=$_GET['wrong'];
$a=$t?round($c/$t*100):0;
$wpm=round(($c/5)/10,2);
$r=$a>=90?"PASS":"FAIL";
$conn->query("INSERT INTO results(user_id,wpm,accuracy,correct,wrong,result)
VALUES('$u','$wpm','$a','$c','$w','$r')");
?>
<h2>Result</h2>
WPM:<?= $wpm ?><br>Accuracy:<?= $a ?>%<br><?= $r ?>
