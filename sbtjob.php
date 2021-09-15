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
margin-bottom:25px;
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
  width: 75%;
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
  font-size: 16px;
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
.form1{
  margin:2% 2%;
  display: inline-block;
  height: 32px;
  padding: 6px 16px;
  width: 35%;
  border: none;
  background-color: #f3f3f3;
  }

</style>

<body>
<section class='back'>
<center><h1 class='title'>Submit Jobs</h1>
<br>
<p><b>Here You can submit jobs.<br>so you can desired have your candidate</b></p>

</center>
 </section>  

<center>
<section>
<div class='box' >

<form >
    
	<input	placeholder="Company Name"
     class="form1" type="text" name="cpname" >

   <input placeholder="Post"
     class="form1" type="text" name="pst" >

   <input placeholder="Est. Salary"
     class="form1" type="int" name="sal" >

     <input class="form1" placeholder="Published on"  type="text" onfocus="(this.type='date')"   name="pblh" >


    <select name="loc" id="" class="form1">
<option value="">Location</option>
<option value="">Delhi</option>
<option value="">Noida</option>
<option value="">Chennai</option>
<option value="">Gurugram</option>
<option value="">Chandigarh</option>
<option value="">Mumbai</option>
<option value="">Banglore</option>
</select>
 

       <select name="catg" id="" class="form1">
<option value="">Category</option>
<option value="">Full Time</option>
<option value="">Part Time</option>
<option value="">Freelance</option>
<option value="">Internship</option>
<option value="">Temporary</option>
</select><br>
<small><b>Discription: </b></small><br>
   <textarea  placeholder=" "
    class="form1"  name="dis" > </textarea>

   
		
    <br>
		<input type="submit" class="apply" value="Submit">
  
	</form>

</div>
</section>

<br>
<h1>Previous Job</h1>
<small><b>Recently submitted job will be shown below</b></small>
<br><br>

  </center>


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

$sql = "SELECT id, company, post , salary , city , type, date FROM comp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<center><div ><table> <tr>
    <th>S-no.</th>
    <th>Company</th>
    <th>Post</th>
    <th>Salary</th>
    <th>Location</th>
    <th>Category</th>
    <th>Published on</th>
    <th>Apply</th>
  </tr>";  
  
  
  
  // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <tr><td>  ". $row["id"]. " </td><td> ". $row["company"]. "  </td><td>  " . $row["post"] . "  </td><td>  " .  $row["salary"] ."  </td><td> " . $row["city"] ."  </td><td>  " . $row["type"] ." </td><td> " . $row["date"] ."</td><td> <button class='apply'>Apply Now</button></td></tr> ";
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
