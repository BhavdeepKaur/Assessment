<html>
<body>
<title>ADMIN_PAGE</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
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
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
     width: 650px;
	 position:relative;

}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
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
<?php
ob_start();
?>

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
<br><br>
<br>
<div class="dropdown">
<class="button" align="center"></button>
<a href="#" class="button">Computer Science</a><br>
  <div class="dropdown-content">

  <form action="admin_page.php" method="post">

<table style="width:100%">
  <tr>
    <th>NAME</th>
    <th>QUALIFICATION</th> 
  </tr>
  <tr>
    <td>
<input type="radio" name="teacher" value="Mrs.Ushveen">Mrs. Ushveen Kaur
	</td>
    <td>&nbsp &nbsp &nbsp M.C.A.(pune),
	M.Phil (Vinayka Mission University)</td> 
  </tr>
  <tr>
    <td><input type="radio" name="teacher" value="Mrs.Megha"> Mrs. Megha Khanna</td>
    <td>&nbsp &nbsp &nbsp MCA, (IP,Delhi)
	Pursuing Phd (DTU)</td> 
  </tr>
    <tr>
    <td><input type="radio" name="teacher" value="Mrs.Rachna"> Mrs. Rachna Sethi	</td>
    <td>&nbsp &nbsp &nbsp	M.C.A.(Lucknow),
	M.Phil. (Computer Sc.) (Madurai)</td> 
  </tr>
    <tr>
    <td><input type="radio" name="teacher" value="Dr.Monika"> Dr. Monika Bajaj</td>
    <td>&nbsp &nbsp &nbsp MCA (IGNOU)
	M.Phil. (Computer Sc.) (Madurai)
	Phd (DU)</td> 
  </tr>
</table>
<h3 align="center">
 <input type="submit" name="Send" value="Submit" style="width: 150px; height: 40px;">
</h3>
</form>
</div>
</class="button">
</div>
<?php
session_start();
if(isset($_REQUEST['teacher']))
{
    $con= mysqli_connect("localhost","root","")
    or die ("Couldn't connect to server");

    mysqli_select_db($con,"Assessment")
    or die ("Couldn't connect to database");


		$tt=$_REQUEST['teacher'];
		$tt=mysqli_real_escape_string($con,$tt);
	
	$query= "UPDATE Teacher SET Grade=(
	         SELECT SUM(T_grade) FROM Teacher_grade 
			 where T_name='$tt')";
    
	$result= mysqli_query($con,$query)
 or die ("Query failed:".mysqli_error($con));

 $query= "SELECT * FROM Teacher_grade WHERE T_name='$tt'";

 $result= mysqli_query($con,$query)
 or die ("Query failed:".mysqli_error($con));

 echo "<h2>$tt</h2>";

 echo "<table border='1'>";
	echo "<tr>";
	echo "<th>Roll_no.</th><th>Q1</th><th>Q2</th><th>Q3</th><th>Q4</th><th>Q5</th><th>Q6</th><th>Q7</th><th>Q8</th><th>Q9</th><th>Q10</th><th>Q11</th><th>Q12</th><th>Q13</th><th>Q14</th><th>Q15</th><th>Q16</th><th>Q17</th><th>Q18</th><th>Total grade</th>";
	echo "</tr>";

	while($row=mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>",$row['Roll'],"</td><td>",$row['Q1'],"</td><td>",$row['Q2'],"</td><td>",$row['Q3'],"</td><td>",$row['Q4'],"</td><td>",$row['Q5'],"</td><td>",$row['Q6'],"</td><td>",$row['Q7'],"</td><td>",$row['8'],"</td><td>",$row['Q9'],"</td><td>",$row['Q10'],"</td><td>",$row['Q11'],"</td><td>",$row['Q12'],"</td><td>",$row['Q13'],"</td><td>",$row['Q14'],"</td><td>",$row['Q15'],"</td><td>",$row['Q16'],"</td><td>",$row['Q17'],"</td><td>",$row['Q18'],"</td><td>",$row['T_grade'],"</td>";
		echo "</tr>";
	}
		echo "</table>";

    
    mysqli_close($con);

}

	ob_end_flush();
?>

</body>
</html>
