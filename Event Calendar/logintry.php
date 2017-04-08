<?php

$link = mysql_connect('localhost', 'root', 'root'); // root is the username and password of database
if (!$link) 
{
    die('Not connected : ' . mysql_error());
}


// aditya is the name of database. you change into karen, whereever and whenever required..
$db_selected = mysql_select_db('aditya', $link);
if (!$db_selected) {
    die ('Can\'t use aditya : ' . mysql_error());
}



$uname=$_REQUEST['username'];       // Username
$pass=$_REQUEST['password'];     // Password    



  $qry = "SELECT * FROM createaccount WHERE username='$uname' and password='$pass'";
  $sql=mysql_query($qry);
   if(mysql_num_rows($sql)>0) {
   
	$userExists = true;
   }else {

	$userExists = false;
   }	
	//echo $qry;

  /*$sql1=mysql_query("SELECT * FROM createaccount WHERE password='$pass'");


  if(mysql_num_rows($sql1)>0)
  {
     $passExists = true;
  }
  else{

     $passExists = false;	
  } */                      

  if(!$userExists){
  
  
    header('Location: login.php?error=true'); //username or password already exists
     //here redirect back to create account . And error=true is used in CreateAccount.php 
     //to show the error . 
  }
  else
  {
    mysql_close();
       header('Location: displaytable.php'); //successfully logged in, redirect him to profile.php
  }
  ?>
