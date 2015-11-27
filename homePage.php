

<?php
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location: login.php");
}else{}
?>

<!DOCTYPE html>
<html>
<body>
<h2>Welcome <?php echo $_SESSION["sess_user"] ;?>!<br><a href="logout.php">Logout</a><br></h2>

</body>
</html>