<?php
require('db.php');
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST")
{
$q_id = $_GET['q_id'];
$username=$_SESSION['username'];
$answer=$_REQUEST['answer'];
$trn_date = date("Y-m-d H:i:s");
$query=mysqli_query($con,"INSERT into answer(q_id,username,answer,trn_date) values('$q_id','$username','$answer','$trn_date')");
echo '<script> alert("Your answer has been successfully posted") </script>';
}
?>
<!DOCTYPE html>
<html>
<head>
<body background="black.png">
<?php
if($_SESSION["username"]){
?>
<form action="" method="post" name="postquestion">
<p style="color:white";>Enter your answer here:</p>
<input type="text" name="title" placeholder="Answer" required />

<p>&nbsp;</p>
<p align="center"><input name = "submit" type="submit" value="Post your answer" /></p>
<p align="center"><input style ="width: 50%; padding: 15px 15px; cursor: pointer; font-weight: bold; background: #4CAF50; margin: 8px 0;color: #fff; border-radius: 4px; border: none; font-size: 70%;"type="button" value="Logout" onclick = "window.location.href ='logout.php'"/></p>
<p align="center"><input style ="width: 50%; padding: 15px 15px; cursor: pointer; font-weight: bold; background: #4CAF50; margin: 8px 0;color: #fff; border-radius: 4px; border: none; font-size: 70%;"type="button" value="Back" onclick = "window.location.href ='welcome.php'"/></p>
</form>
</body>
<link rel="stylesheet" type="text/css" href="style2.css">
<?php
	    }else echo '<script> alert("Please log in first") </script>';
	    ?>
</head>
</html>
<?php}?>