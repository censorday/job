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
  align-items: center;
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





.bigbar{
  background-color:black;
  margin:2% 2%;
  border-radius: 12px;
  overflow: hidden;
  box-shadow:5px 7px 12px #141F72;
  
  display: inline-block;
}

.bigbar:hover{
  box-shadow:10px 18px 15px #753a88;
    transform: scale(1.02);
  transition: all 0.2s ease-in-out;
}




.bar{
 
   max-width:65%;
   height: 230px;
  border-radius: 12px;
  text-align: left;
  line-height: 100%;
  margin: 20px 0%;
   
 padding:0px 2%;
  overflow: hidden;
   display: inline-block;
  background-color: white;
  color:black;


}

.minibar{
  width:160px;
  height: 230px;
  align-items: center;
  border-radius: 12px;
  margin: 20px 1%;
  text-align: center;
  cursor: pointer;
  overflow: hidden;
  display: inline-block;
  background-color: white;
  color:black;

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
  <p class="orange">Full-Time</p>
  <br>
</div>
<div class="card">  
  <P class="green">Work From Home</P>
  <br>
</div>
<div class="card">  
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
  <h3 >Popular Jobs</h3>
  <br>
</div></a>
<a  href="#rec" onclick="rec();"><div class="card">  
  <h3  >Recent Jobs</h3>
  <br>  
</div></a>
</center>
</div>
  
  <section  id="rec" class="rec"><h1><b>Recent Jobs</b></h1> 
  
   <div class="bigbar">  <div class="bar"> 
      <center><h3>Facebook</h3> </center>
      <p>We require a person to manage facebook server and have proper web development  knowledge</p><br>
    <p>   <b>Qualification :</b>M.Sc/B.Tech</p>
     <p>  <b>Salary :</b>₹50000 - ₹55000</p>
     <p>  <b>Location :</b>New Delhi</p>
     </div>
    
    <div class="minibar">
      <h3>Frontend Development</h3> 
      <p class="orange">Partime</p>
      <p ><button class="btn1">Apply Job</button></p>
      <br>
      </div>
  </div>  
    
    
    
     <div class="bigbar">  <div class="bar"> 
      <center><h3>Wipro</h3> </center>
      <p>We require a person to manage facebook server and have proper web development  knowledge</p><br>
    <p>   <b>Qualification :</b>B.Tech/MBA</p>
     <p>  <b>Salary :</b>₹70000 - ₹85000</p>
     <p>  <b>Location :</b>Chennai</p>
     </div>
    
    <div class="minibar">
      <h3>Frontend Development</h3> 
      <p class="green">Work From Home</p>
      <p ><button class="btn1">Apply Job</button></p>
      <br>
      </div>
  </div>
    
    
    
     <div class="bigbar">  <div class="bar"> 
      <center><h3>Google</h3> </center>
      <p>We require a person to manage facebook server and have proper web development  knowledge</p><br>
    <p>   <b>Qualification :</b>B.Tech</p>
     <p>  <b>Salary :</b>₹90000 - ₹100000</p>
     <p>  <b>Location :</b>Gurugram</p>
     </div>
    
    <div class="minibar">
      <h3>Frontend Development</h3> 
      <p class="blue">Full Time</p>
      <p ><button class="btn1">Apply Job</button></p>
      <br>
      </div>
  </div>
    
    
    
     <div class="bigbar">  <div class="bar"> 
      <center><h3>Uber</h3> </center>
      <p>We require a person to manage facebook server and have proper web development  knowledge</p><br>
    <p>   <b>Qualification :</b>Intermidiate</p>
     <p>  <b>Salary :</b>₹45000 - ₹50000</p>
     <p>  <b>Location :</b>New Delhi</p>
     </div>
    
    <div class="minibar">
      <h3>Frontend Development</h3> 
      <p class="red">Freelance</p>
      <p ><button class="btn1">Apply Job</button></p>
      <br>
      </div>
  </div>
    
    
    
  </section>
  
  

  
  
  
   <div id="pop" class="overlay">
	<div class="popup">
		<b>Please fill following form:</b>
		<a class="close" href="#">&times;</a><center>
    <div >
  <form >
    
	<input	placeholder="First Name"
     class="form1" type="text" name="firstname" >

   <input placeholder="Last Name"
     class="form1" type="text" name="lastname" >

   <input placeholder="Email"
     class="form1" type="email" name="email" >

    <input placeholder="Address"
    class="form1" type="address" name="address" >

  <input  placeholder="City"
     class="form1" type="text" name="city" >

   <input  placeholder="Phone"
    class="form1" type="tel" name="phone" >
<br>
   <small><b>CV/Resume: </b></small>
    <input class="form1" type="file" name="file" >
		
    <br>
		<input type="submit" class="btn1" value="Submit">
  
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
