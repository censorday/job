<!DOCTYPE html>
<html>
<style>


@import url('https://fonts.googleapis.com/css2?family=Karla:wght@200&display=swap');


body{
background-color: #e8e8e8;
font-family: 'Karla', sans-serif;

}

.back{
background-color: #2a2a72;
background-image: linear-gradient(115deg, #2a2a72 0%, #009ffd 74%);
height:500px;
color:white;
overflow:hidden;
}

.title{
  font-family:arial;
  font-size:40px;
  font-weight:80;
  letter-spacing:5px;    
  
}

.box{

padding:20px 10px;
margin-top:-240px;
margin-bottom:15px;
background-color: white;
box-shadow:5px 7px 12px black;
border-radius: 1%;
max-width:85%;
min-height:450px;
text-align:center;
color:black;
overflow:hidden;
}
table {

  border: 1px solid #ccc;
  color:black;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}



table tr {
  background-color: #f8f8f8;
  border: 5px solid white;

}

table th,
table td {
  padding: 10px;
  text-align: center;
}

table th {
  font-size: 14px;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.apply{
   margin:2%;
    font-size: 12px;
    height: 35px ;
    padding: 0px 10px;
    border: none ;
    border-radius:5px;
   background: #157efb;
   color: white;
}
.apply:hover{
    background: #f5f5f5;
  color:#157efb;
}
  
.apply:active{
  
    background: #b97ebb;
    color:white;

}
</style>

<body>
<section class='back'>
<center><h1 class='title'>All Candidates</h1>
<br>
<p><b>Here You can choose your desired Candidate.<br>also you can you can further proceed for interview </b></p>

</center>
 </section>  

<?php
$servername = "sql6.freesqldatabase.com";
$username = "sql6437316";
$password = "r94vS6MuAu";
$dbname = "sql6437316";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM emp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<center><div class='box' ><table> <tr>
    <th>Cand. ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Pref. City</th>
    <th>Phone</th>
    <th>D.O.B</th>
    <th>Qualification</th>
    <th>Category</th>
    <th>Additional Qual.</th>
    <th>W.F.H</th>
    <th>CV/Resume</th>
    <th>Hire</th>
  </tr>";  
  
  
  
  // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <tr><td>  ". $row["eid"]. " </td><td> ". $row["enm"]. " " . $row["elnm"]."  </td><td>  " . $row["eemail"] . " </td><td>  "
         .  $row["eadd"] . "  </td><td> " . $row["ecty"] ."   </td><td> " . $row["ephn"] ."  </td><td> " . $row["dob"] ." </td><td>  "
         . $row["qual"] ."   </td><td> " . $row["catg"] ."  </td><td> " . $row["dis"] ."  </td><td> " 
         . $row["wfh"] ."  </td><td> " . $row["ecv"] ."</td><td> 
        <button  class='apply'>Hire  Now</button> </td></tr> ";
    }
    echo "</table></div></center>";
} 



else {
    echo "0 results";
}

$conn->close();
?>

</body>


</html>
