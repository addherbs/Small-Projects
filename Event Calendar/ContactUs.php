<?php
//ini_set('display_errors',1);
//error_reporting(E_ALL);

$link = mysql_connect('localhost', 'root', 'root'); // root is the username and password of database
if (!$link) {
    die('Not connected : ' . mysql_error());
}


// aditya is the name of database. you change into any name, whereever and whenever required..
$db_selected = mysql_select_db('aditya', $link);
if (!$db_selected) {
    die ('Can\'t use aditya : ' . mysql_error());
}



$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$website=$_REQUEST['website'];
$subject=$_REQUEST['subject'];
$msg=$_REQUEST['msg'];



$qry = "INSERT INTO contactus(Name,Email,Website,Subject,Message)    
            VALUES('$name','$email','$website','$subject','$msg')";


if(mysql_query($qry))
{
 header('Location: displaytable.php');
echo "<script>alert(Thank You For Contacting Us. We Will Answer You Soon.);</script>";
}

else
die(mysql_error());  

<html>
<a href="CreateEvent.html"> <img src="4.jpg" width=200 height=200> </a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="DisplayEvents.php"> <img src="viewev.png" width=200 height=200> </a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</html>

mysql_close();

?>

