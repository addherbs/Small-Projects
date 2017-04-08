<?php

$link = mysql_connect('localhost', 'root', 'root'); // root is the username and password of database
if (!$link) {
    die('Not connected : ' . mysql_error());
}


// aditya is the name of database. you change into karen, whereever and whenever required..
$db_selected = mysql_select_db('aditya', $link);
if (!$db_selected) {
    die ('Can\'t use aditya : ' . mysql_error());
}




$query = "SELECT * FROM createaccount"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

?>


<html>
<body>

<a href="CreateEvent.html"> <img src="4.jpg" width=200 height=200> </a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="DisplayEvents.php"> <img src="viewev.png" width=200 height=200> </a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ContactUs.html"> <img src="contactus.jpg" width=200 height=200> </a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="login.php"> <img src="logout.jpg" width=200 height=200> </a>
</body>
</html>

