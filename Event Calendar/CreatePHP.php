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


$fname=$_REQUEST['fname'];       //First Name
$lname=$_REQUEST['lname'];       // Last Name
$uname=$_REQUEST['uname'];       // Username
$pass=$_REQUEST['password'];     // Password    
$email=$_REQUEST['email'];       // E-mail
$cnumber=$_REQUEST['cnumber'];   // Contact Number
$gender=$_REQUEST['gender'];     // Gender



  $sql=mysql_query("SELECT * FROM createaccount WHERE username='$uname'");
   if(mysql_num_rows($sql)>0) {
   
	$userExists = true;
   }else {

	$userExists = false;
   }	
	

  $sql1=mysql_query("SELECT * FROM createaccount WHERE email='$email'");


  if(mysql_num_rows($sql1)>0)
  {
     $emailExists = true;
  }
  else{

     $emailExists = false;	
  }                       

  if($userExists || $emailExists) {
     header('Location: CreateAccount.php?error=true'); //username or event already exists
     //here redirect back to create account . And error=true is used in CreateAccount.php 
     //to show the error . 
  }
  
  else{
            //createaccount is the table name, from database aditya.  you change according to your table name 
  
  mysql_query("INSERT INTO createaccount(fname,lname,username,password,email,cnumber,gender)       
            VALUES('$fname','$lname','$uname','$pass','$email','$cnumber','$gender')")
or die(mysql_error());   

                                    // this will help you insert data into the table :)
  
									//echo "Entered data successfully\n" ;
 

  mysql_close();
  

     header('Location: login.php'); //successfully logged in, redirect him to login.php
  } 
 ?>
