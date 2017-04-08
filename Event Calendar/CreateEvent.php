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


$from=$_REQUEST['from'];
$ename=$_REQUEST['ename'];
$venue=$_REQUEST['venue'];
$timing=$_REQUEST['timing'];
$ecost=$_REQUEST['ecost'];
$salary=$_REQUEST['salary'];
$days=$_REQUEST['days'];
//$tsalary=$_REQUEST['tsalary'];
$email=$_REQUEST['email'];
$cnumber=$_REQUEST['cnumber'];
$description=$_REQUEST['description'];
$cg=$_REQUEST['cg'];
/*$photo=addslashes(file_get_contents($_FILES['photo']['tmp_name']));
$image=getimagesize($_FILES['photo']['tmp_name']);
$imgtype=$image['MIME'];
*/

/*
$q= "INSERT INTO displaytable VALUES('$ename','$venue','$from','$photo','$imgtype')";
$r= mysql_query($q,$link);
if($r)
{
echo " Info Stored Successfully";
}
*/

//mysql_query("INSERT INTO createevent(Event Name) VALUES('$ename')") or die(mysql_error());


$qry = "INSERT INTO createevent(Event_Name,Venue,From_Date,Timing,Number_Of_Days,Entry_Pay,Salary_Per_Day,Email,Head_Contact_Number,Description,Chief_Guest)    
            VALUES('$ename','$venue','$from','$timing','$days','$ecost','$salary','$email','$cnumber','$description','$cg')";


if(mysql_query($qry))
{
"<script>alert('event added');</script>";
 header('Location: displaytable.php');
}else
die(mysql_error());  




mysql_close();

?>

