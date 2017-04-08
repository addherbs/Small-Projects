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




$query = "SELECT * FROM createevent"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

?>

<html>
<style>
@charset "UTF-8";
@import url(postcss.css);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child {
	  color: #FB667A;
}

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
	.container td:nth-child(4),
.container th:nth-child(4) {
		  display: none;
	  }
}
</style>
<body>

<table class="container">


<tr>
<th>Event Name</th>         
<th> Venue </th>
<th> From Date </th>        
<th> Timing </th>
<th> Number Of Days </th>
<th> Entry Pay </th>
<th> Salary Per Day </th>
<th> Email </th>
<th> Head Contact Number </th>
<th> Description </th>
<th> Chief Guest </th>
</tr>

<?php

while($records=mysql_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$records['Event_Name']; //Event_Name,Venue,From_Date,Timing,Number_Of_Days,Entry_Pay,Salary_Per_Day,Email,Head_Contact_Number,Description,Chief_Guest
echo "<td>".$records['Venue'];
echo "<td>".$records['From_Date'];
echo "<td>".$records['Timing'];
echo "<td>".$records['Number_Of_Days'];
echo "<td>".$records['Entry_Pay'];
echo "<td>".$records['Salary_Per_Day'];
echo "<td>".$records['Email'];
echo "<td>".$records['Head_Contact_Number'];
echo "<td>".$records['Chief_Guest'];
echo "<td>".$records['Description'];
echo "</tr>";
}




?>

<a href="CreateEvent.html"> <img src="4.jpg" width=200 height=200> </a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ContactUs.html"> <img src="contactus.jpg" width=200 height=200> </a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="login.php"> <img src="logout.jpg" width=200 height=200> </a>


</body>
</html>












