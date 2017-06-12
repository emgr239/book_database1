<?php
session_name("dbaccess");
session_start();
?>

<html>
<head>
<h2><font color="white">View Table</h2>
</head>
<body style="background: url(http://customize.org/thumbnails/larger/103924.jpg) fixed; background-size: cover;">
<font color="white">

<?php
$conn=mysqli_connect($_SESSION['host'],$_SESSION['user'],$_SESSION['password'],$_SESSION['database']);
$sql="select * from mybooks";
$result=mysqli_query($sql);

if(!mysqli_query($conn,$sql)){
echo "unsuccessful". $sql . " " . mysqli_error($conn);}
else{
$result = $conn->query($sql);
if($result->num_rows >0){
echo "<table>";
echo "<tr style='background-color:8BE2F8'><th>Title</th><th>Author</th><th>Series</th><th>Price</th>";
while($row = $result->fetch_assoc()){
echo "<tr style='background-color:8BE2F8'><td width='200'>".$row["title"]. "</td><td width='100'> ".$row["author"]."</td><td width='100'>".$row["series"]."</td><td width='50'>$ ".$row["price"]."</td>";
};

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


<?php
}
?>
<form action="../access/homepage" method="post">
<p><input type="submit" value="homepage"/></p>
</form> 

</body>
</html>
