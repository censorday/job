<?php
header('Refresh: 1; URL=/sbtjob.php');

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
        $cmp =  $_REQUEST['cpname'];
        $pst = $_REQUEST['pst'];
        $sal =  $_REQUEST['sal'];
        $loc = $_REQUEST['loc'];
        $cat = $_REQUEST['catg'];
        $pbl = $_REQUEST['pblh'];

 $sql = "INSERT INTO comp  VALUES ('$id','$cmp','$pst','$sal','$loc','$cat','$pbl')";

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


