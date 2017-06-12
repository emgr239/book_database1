<?php
session_name("dbaccess");
session_start();
?>
<html>
<head>
<h2><font color="white">Conncection</h2>
</head>
<body style="background: url(http://customize.org/thumbnails/larger/103924.jpg) fixed; background-size: cover;">
<font color="white">

<?php

$_SESSION['database']=$_POST['db'];

$conn=mysqli_connect($_SESSION['host'],$_SESSION['user'],$_SESSION['password'],$_SESSION['database']);
if(!$conn){
echo"Error" . mysqli_connect_error();}
else{
echo "Connected!"
?>
<form action="createdb.php" method="post">
<input type="submit" value="New Entry">
</form>

<form action="remove.php" method="post">
<input type="submit" value="Delete Entry">
</form>

<form action="view.php" method="post">
<input type="submit" value="View Tables">
</form>

<form action="manual.php" method="post">
<input type="submit" value="Manual Instruction">
</form>

<form action="logout.php" method="post">
<input type="submit" value="Logout">
</form>



<?php
;}
?>

</body>
</html>

