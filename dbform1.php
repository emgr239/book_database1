<?php
session_name("dbaccess");
session_start();
?>
<html>
<head>
</head>
<body style="background: url(http://customize.org/thumbnails/larger/103924.jpg) fixed; background-size: cover;">
<font color="white">

<form action="middle.php" method="post">
<p>Username: <input type="text" name="user"/></p>
<p>Password: <input type="password" name="pw"/></p>
<input type="submit" value="enter">
</form>

<form action="../access/homepage" method="post">
<p><input type="submit" value="Homepage"/>
</form>

</body>
</html>
