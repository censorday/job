<?php


$servername = "sql6.freesqldatabase.com";
$username = "sql6437316";
$password = "r94vS6MuAu";
$dbname = "sql6437316";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);
if (!$connect)

  {

  die('Could not connect: ' . mysql_error());

  }


mysqli_query($connect,"INSERT INTO comp (company, post, salary, city , type ,  date)
VALUES ('$_POST[cpname]', '$_POST[pst]', '$_POST[sal]','$_POST[loc]','$_POST[catg]',  '$_POST[pblh]')";
?>
<html>
<body>

<center><h1>Update in progress .. .. ..</h1>
<br>
<p><b>please wait, it will automaticly redirect </b></p>

</center>

</body>
  </html>
