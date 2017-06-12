<?php
session_name("dbaccess");
session_start();
?>

<html>
<head>
<h2><font color="white">Manual Instruction</h2>
</head>
<body style="background: url(http://customize.org/thumbnails/larger/103924.jpg) fixed; background-size: cover;">
<font color="white"> 
<?php

$conn=mysqli_connect($_SESSION['host'],$_SESSION['user'],$_SESSION['password'],$_SESSION['database']);
global $action;
$action=$_POST['maction'];

$pos=strpos($action, select);
if($pos===false){
	$pos2=strpos($action, delete);
	if($pos2===false){
		$pos3=strpos($action, insert);
		if($pos3===false){
			echo "invalid option, please try again";
		} else{
			echo "New Record Created Successfully";
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
<input name="manual" type="submit" value="manual entry"/>
</form>

<form action="logout.php" method="post">
<input type="submit" value="Logout">
</form>

<?php
		}
	} else { 
		echo "Record Deleted Successfully";
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
<input name="manual" type="submit" value="manual entry"/>
</form>

<form action="logout.php" method="post">
<input type="submit" value="Logout">
</form>

<?php
	}
} else {
$result = $conn->query($action);
if($result->num_rows >0){
echo "<table>";
echo "<tr style='background-color:8BE2F8'><th>Title</th><th>Author</th><th>Series</th><th>Price</th>";
while($row = $result->fetch_assoc()){
echo "<tr style='background-color:8BE2F8'><td width='200'>".$row["title"]. "</td><td width='100'> ".$row["author"]."</td><td width='100'>".$row["series"]."</td><td width='50'>$ ".$row["price"]."</td>";
};
echo"<table>";
}else{
echo "0 results";}
?>
 
<form action = "createdb.php" method="post">
<input name="add" type="submit" value="add values"/>
</form>

<form action = "remove.php" method="post">
<input name="view" type="submit" value="delete values"/>
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
