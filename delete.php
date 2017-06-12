<?php
session_name("dbaccess");
session_start();
?>

<html>
<head>
<h2><font color="white">Delete Existing Data</h2>
</head>
<body style="background: url(http://customize.org/thumbnails/larger/103924.jpg) fixed; background-size: cover;">
<font color="white">

<?php
$conn=mysqli_connect($_SESSION['host'],$_SESSION['user'],$_SESSION['password'],$_SESSION['database']);

$title=$_POST['rtitle'];

$sql="delete from mybooks where title='$title'";
if(mysqli_query($conn,$sql)){
echo "Record Deleted Successfully";
?>
 
<form action = "query.php" method="post">
<input name="add" type="submit" value="add values"/>
</form>

<form action = "delete.php" method="post">
<input name="delete" type="submit" value="delete values"/>
</form>

<form action = "view.php" method="post">
<input name="view" type="submit" value="view tables"/>
</form>

<form action = "manual.php" method="post">
<input name="manual" type="submit" value="manual entry"/>
</form>

<form action="logout.php" method="post">
<input type="submit" value="Logout">
</form>

<?php
}
else{
echo"unsucessful ". $sql . " " . mysqli_error($conn);}
?>

<form action="../access/homepage" method="post">
<p><input type="submit" value="homepage"/></p>
</form> 

</body>
</html>

