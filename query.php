<?php
session_name("dbaccess");
session_start();
?>
<html>
<head>
<h2><font color="white">Insert New Data</h2>
</head>
<body style="background: url(http://customize.org/thumbnails/larger/103924.jpg) fixed; background-size: cover;">
<font color="white">

<?php

$title=$_POST['title'];
$author=$_POST['author'];
$series=$_POST['series'];
$price=$_POST['price'];
$conn=mysqli_connect($_SESSION['host'],$_SESSION['user'],$_SESSION['password'],$_SESSION['database']);

$sql="insert into mybooks(title,author,series,price) values('$title','$author', '$series', '$price')";


if(!mysqli_query($conn,$sql)){
echo "unsuccessful ". $sql . " " .mysqli_error($conn);}
else{
echo "New Record Created Successfully";
?>
<p>Choose Next Action:</p>
<form action = "createdb.php" method="post">
<input name="new" type="submit" value="new entry"/>
</form>
 
<form action = "remove.php" method="post">
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
?>
<form action="../access/homepage" method="post">
<p><input type="submit" value="homepage"/></p>
</form> 

</body>
</html>
