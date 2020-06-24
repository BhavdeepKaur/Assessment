<html>
<head>
<title> Form </title>
<style>
#container {
    position:relative;
    width: 500px;
    height: 860px;
    top: 50%;
    left: 50%;
    margin-top: -40px;
    margin-left: -170px;
	background: #fff;
    border-radius: 5px;
    border: 4px solid #33c5ff;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
	
}

</style>

<body bgcolor ="#E6E6FA">

<?php
ob_start();
session_start();
$con= mysqli_connect("localhost","root","")
    	or die ("Couldn't connect to server");

	    mysqli_select_db($con,"Assessment")
	    or die ("Couldn't connect to database");

	    $query="Select * From teacher_grade";

	    $result= mysqli_query($con,$query)
	or die ("Query failed:".mysqli_error($con));

	while($row=mysqli_fetch_array($result))
	{
		if($row['Q1']==NULL)
		{
			$roll=$row['Roll']; 
			$Tname=$row['T_name'];
		}
	}


echo "<h2><u>FILL FORM FOR $Tname</u></h2>";

mysqli_close($con);
?>
<div id="container">
<form method="post" >
	Q1. The teacher comes prepared for the classes.<br>
	<input type="radio" name="1" value="4"> 4 
	<input type="radio" name="1" value="3"> 3 
	<input type="radio" name="1" value="2"> 2 
	<input type="radio" name="1" value="1"> 1 <br>
	Q2. The teacher is effective in communicating in the class.<br>
	<input type="radio" name="2" value="4"> 4  
	<input type="radio" name="2" value="3"> 3 
	<input type="radio" name="2" value="2"> 2 
	<input type="radio" name="2" value="1"> 1 <br>
	Q3. The teacher seems enthusiastic about taking classes.<br>
	<input type="radio" name="3" value="4"> 4 
	<input type="radio" name="3" value="3"> 3 
	<input type="radio" name="3" value="2"> 2 
	<input type="radio" name="3" value="1"> 1 <br>
	Q4. The teaching sessions have been participative and interactive.<br>
	<input type="radio" name="4" value="4"> 4 
	<input type="radio" name="4" value="3"> 3 
	<input type="radio" name="4" value="2"> 2 
	<input type="radio" name="4" value="1"> 1 <br>
	Q5. The teacher’s presentations have enhanced my understanding of the subject.<br>
	<input type="radio" name="5" value="4"> 4  
	<input type="radio" name="5" value="3"> 3 
	<input type="radio" name="5" value="2"> 2 
	<input type="radio" name="5" value="1"> 1 <br>
	Q6. I look forward to attending classes of the teacher. <br>
	<input type="radio" name="6" value="4"> 4 
	<input type="radio" name="6" value="3"> 3 
	<input type="radio" name="6" value="2"> 2 
	<input type="radio" name="6" value="1"> 1 <br>
	Q7. The teacher answers questions asked in the class. <br>
	<input type="radio" name="7" value="4"> 4 
	<input type="radio" name="7" value="3"> 3 
	<input type="radio" name="7" value="2"> 2 
	<input type="radio" name="7" value="1"> 1 <br>
	Q8. Students pay attention to what the teacher teaches in the class. <br>
	<input type="radio" name="8" value="4"> 4 
	<input type="radio" name="8" value="3"> 3 
	<input type="radio" name="8" value="2"> 2 
	<input type="radio" name="8" value="1"> 1 <br>
	Q9. The teacher teaches in a well organized manner. <br>
	<input type="radio" name="9" value="4"> 4 
	<input type="radio" name="9" value="3"> 3 
	<input type="radio" name="9" value="2"> 2 
	<input type="radio" name="9" value="1"> 1 <br>
	Q10. The teacher seems to care whether the students have learnt. <br>
	<input type="radio" name="10" value="4"> 4 
	<input type="radio" name="10" value="3"> 3 
	<input type="radio" name="10" value="2"> 2 
	<input type="radio" name="10" value="1"> 1 <br>
	Q11. Help from teacher has been readily available for questions, assignments and other problems outside the class.<br>
	<input type="radio" name="11" value="4"> 4 
	<input type="radio" name="11" value="3"> 3 
	<input type="radio" name="11" value="2"> 2 
	<input type="radio" name="11" value="1"> 1 <br>
	Q12. The teacher makes the subject interesting.<br>
	<input type="radio" name="12" value="4"> 4 
	<input type="radio" name="12" value="3"> 3 
	<input type="radio" name="12" value="2"> 2 
	<input type="radio" name="12" value="1"> 1 <br>
	Q13. The teacher is regular and punctual in taking lecture classes. <br>
	<input type="radio" name="13" value="4"> 4 
	<input type="radio" name="13" value="3"> 3 
	<input type="radio" name="13" value="2"> 2 
	<input type="radio" name="13" value="1"> 1 <br>
	Q14.The teacher uses several teaching aids (such as blackboard, ppts,etc) efficiently. <br>
	<input type="radio" name="14" value="4"> 4 
	<input type="radio" name="14" value="3"> 3 
	<input type="radio" name="14" value="2"> 2 
	<input type="radio" name="14" value="1"> 1 <br>
	Q15. The teacher makes the subject practically relevant.<br>
	<input type="radio" name="15" value="4"> 4 
	<input type="radio" name="15" value="3"> 3 
	<input type="radio" name="15" value="2"> 2 
	<input type="radio" name="15" value="1"> 1 <br>
	Q16. The internal assessment system and its components were made clear at the beginning of the course.<br>  
	<input type="radio" name="16" value="4"> 4 
	<input type="radio" name="16" value="3"> 3 
	<input type="radio" name="16" value="2"> 2 
	<input type="radio" name="16" value="1"> 1 <br>
	Q17. The teacher adequately covers all the topics listed in the syllabus.<br>
	<input type="radio" name="17" value="4"> 4 
	<input type="radio" name="17" value="3"> 3 
	<input type="radio" name="17" value="2"> 2 
	<input type="radio" name="17" value="1"> 1 <br>
	Q18. On the whole, he/she is an effective teacher.<br>
	<input type="radio" name="18" value="4"> 4 
	<input type="radio" name="18" value="3"> 3 
	<input type="radio" name="18" value="2"> 2 
	<input type="radio" name="18" value="1"> 1 <br>
<center>
<input type="submit" name="submit" value="Submit"  style="width: 150px; height: 40px;"> 
</center>
</form>
</div>

<?php
	
	if(isset($_POST["submit"]))
	{
		$q="1";
		$sum=0;
		$count=0;

		$con= mysqli_connect("localhost","root","")
    	or die ("Couldn't connect to server");

	    mysqli_select_db($con,"Assessment")
	    or die ("Couldn't connect to database");

	$roll1=mysqli_real_escape_string($con,$roll);
	$Tname1=mysqli_real_escape_string($con,$Tname);
    
		while($q<=18)
		{
			if(isset($_POST["$q"]))
			{
				$index=$_POST["$q"];
				$sum+=$_POST["$q"];
				$query= "UPDATE Teacher_grade SET Q$q=$index WHERE Roll='$roll1' AND T_name='$Tname1' ";
				
				$result= mysqli_query($con,$query)
				or die ("Query failed:".mysqli_error($con));
				$count++;
			}
			$q++;
		}

		if($count==18)
		{
			$query= "UPDATE Teacher_grade SET T_grade=$sum WHERE Roll='$roll1' AND T_name='$Tname1' ";
				
				$result= mysqli_query($con,$query)
				or die ("Query failed:".mysqli_error($con));

				echo "<h3>Total grade point for $Tname1: $sum.</h3>";
				header("Location:Computer.php");
		}
		else
		{
			echo "<br><br>Some Question(s) are not answered.";
			
		}

	mysqli_close($con);

	}

	ob_end_flush();
?>
</body>
</head>
</html>