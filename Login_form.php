
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Login Form !!! </title>
<style>

html, body {
    width: 100%;
    height: 100%;
    font-family: "Helvetica Neue", Helvetica, sans-serif;
    color: #444;
   
    background: #f0f0f0;
}
#container {
    position: fixed;
    width: 340px;
    height: 280px;
    top: 50%;
    left: 50%;
    margin-top: -140px;
    margin-left: -170px;
	background: #fff;
    border-radius: 3px;
    border: 1px solid #ccc;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
	
}

header{
  background :#405580;
  width:100%;
  height:50px;
  
  top:0;
  left:0;
  z-index:100;
  opacity:0.90%
}

form {
    margin: 0 auto;
    margin-top: 20px;
}

label {
    color: #555;
    display: inline-block;
    margin-left: 18px;
    padding-top: 10px;
    font-size: 14px;
}

p a {
    font-size: 11px;
    color: #aaa;
    float: right;
    margin-top: -13px;
    margin-right: 20px;
 
}



input {
    font-family: "Helvetica Neue", Helvetica, sans-serif;
    font-size: 12px;
    outline: none;
}

input[type=text],
input[type=password] {
    color: #777;
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    margin-left: 18px;
    width: 290px;
    height: 35px;
	border: 1px solid #c7d0d2;
    border-radius: 2px;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;

	}

input[type=text]:hover,
input[type=password]:hover {
    border: 1px solid #b6bfc0;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .7), 0 0 0 5px #f5f7f8;
}

input[type=text]:focus,
input[type=password]:focus {
    border: 1px solid #a8c9e4;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #e6f2f9;
}

#lower {
    background: #ecf2f5;
    width: 100%;
    height: 69px;
    margin-top: 20px;
	  box-shadow: inset 0 1px 1px #fff;
    border-top: 1px solid #ccc;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}

input[type=checkbox] {
    margin-left: 20px;
    margin-top: 30px;
}

.check {
    margin-left: 3px;
	font-size: 11px;
    color: #444;
    text-shadow: 0 1px 0 #fff;
}

input[type=submit] {
    float: right;
    margin-right: 20px;
    margin-top: 20px;
    width: 80px;
    height: 30px;
font-size: 14px;
    font-weight: bold;
    color: #fff;
    background-color: #acd6ef; 
    
    border-radius: 30px;
    border: 1px solid #66add6;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .3), inset 0 1px 0 rgba(255, 255, 255, .5);
    cursor: pointer;
}

footer{
 background :#405580;
  width:100%;
  height:100px;
  left:0;
  z-index:100;
  opacity:0.90%}


</style>

</head>

<body>
    <header>
    </header>
   
    <div id="container">
        <form method="POST">
            <label for="rollno">Roll No:</label>
            <input type="text" id="rollno" name="rollno">

            <label for="password">Password:</label>
            <input type="password" name="password">

            <div id="lower">
                <input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>
                <input type="submit" name="submit" value="Login">
            </div>
        </form>
    </div>
	
	

	<footer>
    </footer>
	<br><br><br>
<?php
ob_start();
session_start();
if(isset($_REQUEST['submit'])){

$con = mysqli_connect("localhost","root","")
or die ("Couldn't connect to server");

mysqli_select_db($con,"Assessment")
or die ("Couldn't connect to database");

$username=$_REQUEST['rollno'];
$password=$_REQUEST['password'];

$query= "SELECT * FROM Student";
$result= mysqli_query($con,$query)
or die ("Query failed:".mysqli_error());

while($row=mysqli_fetch_array($result))
{
$user=$row['Roll']; 
$pass=$row['Dob'];

if($username== $user && $password==$pass)
{	$flag=True;
	break;
}	
else
$flag=False;
}

if($flag==True)
{
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
    
	header("Location:Computer.php");
}
if($username=="admin" && $password=="admin")
{
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;

	header("Location:admin_page.php");
}
else
{
 echo "Sorry!! Incorrect Roll No or Password. Enter Again!!";
}
}
ob_end_flush();
?>
</body>
</html>

