

<style>


table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 85%;
  table-layout: fixed;
}



table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: 4px;
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

</style>



<?php
$servername = "localhost";
$username = "id17221179_avsjob";
$password = "P@vashishth99";
$dbname = "id17221179_job";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, company, post , salary , city , type, date FROM comp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table> <tr>
    <th>S-no.</th>
    <th>Company</th>
    <th>Post</th>
    <th>Salary</th>
    <th>Location</th>
    <th>Category</th>
    <th>Published on</th>
  </tr>";  
  
  
  
  // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <tr><td>  ". $row["id"]. " </td><td> ". $row["company"]. "  </td><td>  " . $row["post"] . "  </td><td>  " .  $row["salary"] ."  </td><td> " . $row["city"] ."  </td><td>  " . $row["type"] ." </td><td> " . $row["date"] ."</td></tr> ";
    }
    echo "</table>";
} 



else {
    echo "0 results";
}

$conn->close();
?>



