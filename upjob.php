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

        $cmp =  $_REQUEST['cpname'];
        $pst = $_REQUEST['pst'];
        $sal =  $_REQUEST['sal'];
        $loc = $_REQUEST['loc'];
        $cat = $_REQUEST['catg'];
        $pbl = $_REQUEST['pblh'];

 $sql = "INSERT INTO comp  VALUES ('$cmp','$pst','$sal','$loc','$cat','$pbl')";

 if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
 
   echo nl2br("\$cmp\n $pst\n "
                . "$sal\n $loc\n $pbl");
        }

else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>

<html>
<body>

<center><h1>Update in progress .. .. ..</h1>
<br>
<p><b>please wait, it will automaticly redirect </b></p>

</center>

</body>
  </html>
