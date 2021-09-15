<?php


$servername = "sql6.freesqldatabase.com";
$username = "sql6437316";
$password = "r94vS6MuAu";
$dbname = "sql6437316";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check
  if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }

      echo  $cid=$_GET['cid'];
        $cn=$_GET['cn'];
        $po=$_GET['po'];
        $ct=$_GET['ct'];
        $tp=$_GET['tp'];
        $dt=$_GET['dt'];