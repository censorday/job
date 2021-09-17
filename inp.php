<html>
	
	<head>
		<title>AVJ</title>
		<style>
@import url('https://fonts.googleapis.com/css2?family=Karla:wght@200&display=swap');

:root{
  --rec: none; /*Create Font*/
}



body{
background-color: #e8e8e8;
color:white;
margin:-1%;
font-family: 'Karla', sans-serif;
}

.back{
background-color: #2a2a72;
background-image: linear-gradient(115deg, #2a2a72 0%, #009ffd 74%);
height:500px;
overflow:hidden;
}

a{
text-decoration: none;
  color:white;
}

h2{
  
  font-weight:100;
}
.sectop{
  
  margin-top:6px;
  min-height:300px;
  margin:1% 8%;
  color:white;
  overflow:hidden;
}

.img{
  padding-right:5%;
  float:right;
width:30%;
height:auto;
  
}
.intro{
  margin-top: -2% ;
  color:white;
  font-family:arial;
  font-size:40px;
  font-weight:80;
  letter-spacing:5px;
 }

.box{
margin: auto;
padding-top:10px;
padding-bottom:20px;
margin-top:-80px;
margin-bottom:15px;
background-color: white;
box-shadow:5px 7px 12px #868B8E;
border-radius: 1%;
max-width:85%;
min-height:450px;
text-align:center;
color:black;
overflow:hidden;
}

.card{
  width:150px;
  height: calc(11.7 * 150px / 9);
  background-color: #2C7DFA;
  border-radius: 12px;
  margin: 20px 5%;
  text-align: center;
  cursor: pointer;
  overflow: hidden;
  box-shadow:5px 7px 12px #141F72;
  display: inline-block;
}

.card:hover{
  background-color: #0f36a5;
  box-shadow:10px 18px 15px #753a88;
}

.search {
  width: 400px;
  height: 40px;
  padding: 0 1rem; 
  background: #e8e8e8;
  border-radius: 2%;
  border: 1px ;
  transition: transform 0.1s ease-in-out;
}

.frm{
  padding:2% 2%;
  border-radius: 2%;
  
}

.form{
  
    height: 40px ;
    background: #fff ;
    font-size: 15px;
    color:black;
   padding-left: 10px;
    margin:2% 1%;
    border: 1px solid #d9d9d9;
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

.btn{
  margin:2%;  
  font-size: 15px;
    height: 40px ;
    padding: 0px 40px;
    border: none ;
    border-radius:5px;
    background: #00d363;
    color: white;
}



.btn1{
   margin:2%;
    font-size: 15px;
    height: 40px ;
    padding: 0px 40px;
    border: none ;
    border-radius:5px;
   background: #157efb;
   color: white;
}


.btn:hover , .btn1:hover{
    background: #f5f5f5;
    color:#157efb;
}
.btn:active ,.btn1:active{
  
    background: #b97ebb;
    color:white;
}

.btn2 {
    padding: 13px 45.5px;
    border: solid 2px #444444;
    border-radius: 47px;
    text-align: center;
    font-size: 14px;
    margin-right: 15px;
    margin-left: 15px;
    transition: .4s;
		
}
.btn2:hover{
  background-color:black;
  color:white;
}

.sec2{
margin: auto;
padding-top:10px;
padding-bottom:20px;
margin-top:30px;
margin-bottom:15px;
background-color: white;
border-radius: 1%;
max-width:85%;
min-height:350px;
text-align:center;
color:black;
overflow:hidden;
box-shadow:5px 7px 12px #868B8E;
  
}

.pplr{
  margin:2%;
    font-size: 15px;
    height: 40px ;
    min-width:15%;
    padding: 5px 10px;
    border: 1px solid #d5f3e2;
    border-radius:5px;
    background: white;
    color: #1a1a1a;
  
}
.search:hover , .search:focus, .pplr:hover{
  background-color:black;
  color:white;
}
{
  background-color:black;
  color:white;
}



.rec {
  text-align:center;
margin: auto;
padding-top:10px;
padding-bottom:20px;
margin-top:30px;
margin-bottom:15px;
color:black;
display: var(--rec);
}




.rec table {

  border: 1px solid #ccc;
  color:black;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 95%;
  table-layout: fixed;
}

.rec table tr {
  background-color: white;
  border: 15px solid #e8e8e8;

}

.rec table tr:hover {
  box-shadow:7px 10px 8px #753a88;
    transform: scale(1.01);
  transition: all 0.2s ease-in-out;

}

.rec table th,
.rec table td {
  padding: 10px;
  text-align: center;
}

.rec table th {
  font-size: 14px;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.orange{
    display: inline-block;
    background:orange;
    padding: 2px 6px;
    font-size: 75%;
    color:black;
   border:none;
    font-weight: 700;
    text-align: center;
    border-radius: 25px;
}
.orange:active{
background: #157efb;
color: white;
      }
.green{
    display: inline-block;
    background:green;
    padding: 2px 6px;
    color:white;
    font-size: 75%;
    font-weight: 700;
    text-align: center;
    border-radius: 25px;
}

.blue{
    display: inline-block;
    color:white;
    background:blue;
    padding: 2px 6px;
    font-size: 75%;
    font-weight: 700;
    text-align: center;
    border-radius: 25px;
}
.red{
    display: inline-block;
    background:red;
    padding: 2px 6px;
    font-size: 75%;
    font-weight: 700;
    color:white;
    text-align: center;
    border-radius: 25px;
}












/*Pop up*/
 .overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  
  opacity: 1;
  z-index: 999;
}
.popup {
  margin: 40px auto;
  padding: 20px;
  text-align:left;
  background: #fff;
  border-radius: 5px;
  width: 85%;
  height:auto;
  color:black;
  position: relative;
  transition: all 2s ease-in-out;
}  
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: black;
}



</style>
</head>
<body>

<section class="back">
<div class="sectop"><div  style="float: right;padding: 3%;"><a  href="/sbtjob.php" class="orange">Publish a job</a></div>
<h2>Dream-Job</h2>
  <br>
  <img class="img" src="https://avstudy.herokuapp.com/anim.png"></img> 
  <h3>Join Us</h3>
  <h3 class="intro">DREAM-JOB</h3>
  
   <small><p>(make your career with us)</p></small> 
</div>      
  </section>         
<section class="box">  
  <h2>New Job for New Generation</h2>
  <br>
<div >  
  <a href="#rec" onclick="rec();" > <input  type="button" value="Find a Job" class="btn1"></a>
  
   <input type="button" value="Find a Candidate" class="btn1">

  </div>
 <br>
 <from class="frm">  
<input type="text" class="form" placeholder="eg. Garphic. Web Developer">
    
<select name="" id="" class="form">
<option value="">Category</option>
<option value="">Full Time</option>
<option value="">Part Time</option>
<option value="">Freelance</option>
<option value="">Internship</option>
<option value="">Temporary</option>
</select>
    
<select name="" id="" class="form">
<option value="">Location</option>
<option value="">Delhi</option>
<option value="">Noida</option>
<option value="">Chennai</option>
<option value="">Gurugram</option>
<option value="">Chandigarh</option>
<option value="">Mumbai</option>
<option value="">Banglore</option>
</select>
 
    
 <a href="/job.php"><input type="submit" value="Search a job" class="btn"></a>
  </form>
  
<h5><i>( or search Jobs Made for you )<i></h5>
  
<input onclick="window.location.href='#pop'" type="submit" value="Submit Qualification" class="btn2">
</section>
<br>
<section><center>
<div class="card">  
  <h2>Get</h2>
  <h1>Jobs</h1><br>
  <p class="orange">Full-Time</p>
  <br>
</div>
<div class="card">  
<h2>Get</h2>
  <h1>Jobs</h1><br>
<P class="green">Work From Home</P>
  <br>
</div>
<div class="card">  
<h2>Get</h2>
  <h1>Jobs</h1><br>
<P class="red">Part-Time</P>
  <br>
</div></center>
</section>

<section id="pplr" class="sec2"><h1><b>Popular Jobs</b></h1>
  <br>
  <input class="search" type="text" placeholder='Search for your desired Job'>
 <br> <br>
 <div>
   <input type="button" class="pplr" href="" value="Graphic Designer">

   
  <input type="button" class="pplr" href="" value="Advertising 
  ">  
   
   <input type="button" class="pplr" href="" value="Web Development 
  ">  
   
   <input type="button" class="pplr" href="" value="Education & Training 
  ">  
   
   <input type="button" class="pplr" href="" value="Writing 
  ">  
   
   <input type="button" class="pplr" href="" value="Marketing & Sales ">  
   
   <input type="button" class="pplr" href="" value="PHP, Java Programming"> 
   
   <input type="button" class="pplr" href="" value="Software development "> 
   
  
  </div>
  
  
  
  
</section>

<div>
<center>
<a href="#pplr"><div  class="card">  
  <br><h1 >Popular Jobs</h1>
  <br>
</div></a>
<a  href="#rec" onclick="rec();"><div class="card">  
<br><h1  >Recent Jobs</h1>
  <br>  
</div></a>
</center>
</div>
  
  <section  class="rec"><h1><b>Recent Jobs</b></h1> 
  
  
  
    
    
    
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
    echo "<center><div id='rec'  ><table> <tr >
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
        echo " <tr ><td>  ". $row["company"]. "  </td><td>  " . $row["post"] . "  </td><td>  " .  $row["salary"] .
        "  </td><td> " . $row["city"] ."  </td><td>  " . $row["type"] ." </td><td> " . $row["date"] ."</td><td> 
        <a href='jobform.php?cid=$row[id]&cn=$row[company]&po=$row[post]&sl=$row[salary]&ct=$row[city]&tp=$row[type]&dt=$row[date] '>
        <button  class='btn1'>Apply Now</button></a>
      
        </td></tr> ";
    }
    echo "</table></div></center>";
} 



else {
    echo "0 results";
}

$conn->close();
?>

    
    
    
  </section>
  
  

  
  
  
   <div id="pop" class="overlay">
	<div class="popup">
		<b>Please fill following form:</b>
		<a class="close" href="#">&times;</a><center>
    <div >
  <form action="upemp.php" method="post">
    
  <input	placeholder="First Name"
     class="form1" type="text" name="firstname" >

   <input placeholder="Last Name"
     class="form1" type="text" name="lastname" >
  <input placeholder="Father's Name"
     class="form1" type="text" name="fathername" >

   <input placeholder="Email"
     class="form1" type="email" name="email" >

    <input placeholder="Perm. Address"
    class="form1" type="address" name="address" >

    <select name="loc" id="" class="form1">
<option value="">Location</option>
<option value="Delhi">Delhi</option>
<option value="Noida">Noida</option>
<option value="Chennai">Chennai</option>
<option value="Gurugram">Gurugram</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Mumbai">Mumbai</option>
<option value="Banglore">Banglore</option>
</select>

   <input  placeholder="Phone"
    class="form1" type="tel" name="phone" >

  
	


     <input class="form1" placeholder="Date-of-Birth"  type="text" onfocus="(this.type='date')"   name="dob" >


    <select name="qul" id="" class="form1">
<option value="">Primary Qualification</option>
<option value="B.tech">B.Tech</option>
<option value="M.Tech">M.Tech</option>
<option value="B.Sc">B.Sc</option>
<option value="M.Sc">M.Sc</option>
<option value="M.Ba">M.Ba</option>
<option value="12th">12th only</option>
<option value="10th">10th only</option>
</select>
 

       <select name="catg" id="" class="form1">
<option value="">Job Prefrence</option>
<option value="Full-Time">Full Time</option>
<option value="Part-Time">Part Time</option>
<option value="Freelance">Freelance</option>
<option value="Internship">Internship</option>
<option value="Temporary">Temporary</option>
</select><br>

<input type="checkbox"  name="wfh" value="wfh">  <small><b>I Prefer Work From Home </b></small></input>
<br><br>
   <small><b>CV/Resume: </b></small>
    <input class="form1" type="file" name="file" >
		
   
		
    <br>
		<input type="submit" class="apply" value="Submit">
  
		</form>
</div>
   
    <br><br>
    <center></div></div>
		
	</body>	
		<script>
		
		function rec() {

	let dsp = "block"
  document.documentElement.style.setProperty('--rec', dsp)
}



		</script>
		</html>
