<?php
header('Refresh: 2; URL=/sbtjob.php');

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
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
 
   echo nl2br("\n $cmp\n $pst\n "
                . "$sal\n $loc\n $pbl");
        }

else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>


