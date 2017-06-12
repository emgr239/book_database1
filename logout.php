<?php
session_name("dbaccess");
session_start();
session_register_shutdown();
?>
<html>
<title>Logout</title>
<head>
<h1><font color="white">Logged Out!</h1>
</head>
<body style="background: url(http://www.daoulaba.com/i/2017/05/black-and-blue-abstract-wallpaper-free.jpg) fixed; background-size: cover;">

<form action="../access/homepage" method="post">
<p><input type="submit" value="homepage"/></p>
</form>
</body>
<html>

