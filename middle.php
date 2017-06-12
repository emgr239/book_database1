<?php
session_name("dbaccess");
session_start();
?>

<html>
<title>Database Selection</title>
<head><h2><font color="white">Enter a database: </h2></head>
<body style="background: url(http://customize.org/thumbnails/larger/103924.jpg) fixed; background-size: cover;">
<font color="white">
<?php
$_SESSION['user']=$_POST['user'];
$_SESSION['password']=$_POST['pw'];
$_SESSION['host']="localhost";

$conn=mysqli_connect($_SESSION['host'],$_SESSION['user'],$_SESSION['password']);
if(!$conn){
echo "error";}
else{
echo "Welcome  user: $User ";
$sql="show databases";
$result=mysqli_query($conn,$sql);
if(!mysqli_query($conn,$sql)){
echo "unsuccessful ";}
else{
if($result->num_rows >0){
echo "<table>";
echo "<tr style='background-color:8BE2F8'><th>Database</th>";
while($row = $result->fetch_assoc()){
echo "<tr style='background-color:8BE2F8'><td width='200'>".$row['Database']. "</td>";
};
} else{
echo "0 results";}
}
?>
<form action="connect.php" method="post">
<p><input type="text" name="db"/></p>
<input type="submit"/>
</form>

<?php
}
?>
