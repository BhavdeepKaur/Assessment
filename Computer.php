<html>
<head>
	<title>Computer Science</title>
</head>
<style type="text/css">

p{
  padding:1%
}
a{
  color:#fff;
  text decoration:none;
  font-weight:bold;
}
a:hover{
  color:#fff;
  text decoration:underline;
}
header{
  background :#405580;
  width:100%;
  height:86px;
  position:fixed;
  top:0;
  left:0;
  z-index:100;
  opacity:0.90%
}

nav {
    float:right;
	padding:35px 20px 20px 0
}
ul{
   list-style:none;
}
nav ul li{
  display:inline-block;
  float:left;
  padding:10px;
}
.current{
   color:#fff;
   text-decoration:underline;
}

</style>
<style type="text/css">
footer.second{
   border-top:1px solid #4d4e50;
   background-color:#333333;
   max-height:200px;
   text-align:center;
   opacity:0.95;
}
</style>


<body>

<header>
   <nav>
   <ul>
      <li><a href ="index.html">Home</a></li>
	  <li><a href="about.html">About Us</a></li>
	  <li><a href="Login_form.php">Department</a></li>
	  <li><a href="contact.html">Contact Us</a></li>
   </ul>  
	</nav> 
   </header>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>


		<h1 align="center"><u>COMPUTER SCIENCE</u></h1>
		<br>
		<br>
		<br>
		

 <h3 align="center"><form action="Computer.php" method="post">
  <input type="radio" name="teacher" value="Mrs.Ushveen">Mrs.Ushveen<br>
  <input type="radio" name="teacher" value="Mrs.Rachna">Mrs.Rachna<br>
  <input type="radio" name="teacher" value="Mrs.Megha">Mrs.Megha<br>
  <input type="radio" name="teacher" value="Mrs.Monica">Mrs.Monica<br>
  <input type="radio" name="teacher" value="Mr.Mishra">Mr.Mishra<br>

  <br><br>
  <input type="submit" name="Send" value="Submit" style="width: 150px; height: 40px;">
  </form>
</h3>

<?php
session_start();
if(isset($_REQUEST['Send']) && isset($_REQUEST['teacher']))
{
    $con= mysqli_connect("localhost","root","")
    or die ("Couldn't connect to server");

    mysqli_select_db($con,"Assessment")
    or die ("Couldn't connect to database");

$username=$_SESSION['username'];
$username=mysqli_real_escape_string($con,$username);

$teacher=$_REQUEST['teacher'];
$teacher=mysqli_real_escape_string($con,$teacher);

$query= "INSERT INTO teacher_grade (Roll,T_name) VALUES ('$username','$teacher')";

$result= mysqli_query($con,$query)
or die ("Query failed:".mysqli_error($con));

$query="select * from Teacher_grade";
$result= mysqli_query($con,$query)
or die ("Query failed:".mysqli_error($con));
    
    mysqli_close($con);

header("Location:Form.php");
}
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class= "second">
	  <p>@Copyright-Teacher Assessment,2017</p>
	
</footer>
</body>
</html>

