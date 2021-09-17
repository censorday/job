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

//variable  value
         $id=  NULL;   
        $nm =  $_REQUEST['nm'];
        $lnm = $_REQUEST['lnm'];
        $eml =  $_REQUEST['eml'];
        $add = $_REQUEST['add'];
        $loc = $_REQUEST['loc'];
        $phn = $_REQUEST['phn'];
        $dob =  $_REQUEST['dob'];
        $qual = $_REQUEST['qual'];
        $catg =  $_REQUEST['catg'];
        $dis = $_REQUEST['dis'];
        $wfh = $_REQUEST['wfh'];
        $ecv = $_REQUEST['ecv'];

 $sql = "INSERT INTO emp  VALUES ('$id','$nm','$lnm','$eml','$add','$loc','$phn','$dob','$qual','$catg','$dis','$wfh','$ecv')";

 if(mysqli_query($conn, $sql)){
            echo "<center><br><br><br><h3>Yor Job successfully PUBLISHED</h3><br><br><p>Now you are redirecting to previous page</p></center>"; 
 

        }

else{
            echo "ERROR:  $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>


