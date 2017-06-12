<?php
session_name("dbaccess");
session_start();
?>

<html>
<head>
</head>
<body>
<?php

$conn=mysqli_connect($_SESSION['host'],$_SESSION['user'],$_SESSION['password'],$_SESSION['database']);
global $action;
$action=$_POST['maction'];

if(mysqli_query($conn,$action)){
echo "success";
?>

<form action = "createdb.php" method="post">
<input name="add" type="submit" value="add values"/>
</form>

<form action = "remove.php" method="post">
<input name="delete" type="submit" value="delete values"/>
</form>

<form action = "view.php" method="post">
<input name="view" type="submit" value="view tables"/>
</form>

<form action = "manual.php" method="post">
<p><input name="manual" type="submit" value="manual entry"/></p>
</form>

<form action="logout.php" method="post">
<input type="submit" value="Logout">
</form>

<?php
}
else { "unsuccessful";}
?>
</body>
</html>
