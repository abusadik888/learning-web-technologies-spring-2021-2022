<?php
$foodname="";
$err_foodname=""; 
$Sellprice="";
$err_Sellprice="";
$od="";
$err_od="";
$comment="";
$err_comment="";
$passwood="";
$err_passwood="";
$err=false;
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		if(empty($_POST["foodname"]))
		{
			$err_foodname="*Food name Required";
			$err=true;
		}
		else if (strlen($_POST["foodname"])<=3)
		{
			$err_foodname="User name must be greater then 3";
			$err=true;
		}
		else
		{  
			$foodname=$_POST["foodname"];
		}
		if(empty($_POST["Sellprice"]))
		{
			$err_Sellprice="*Sellprice Required";
			$err = true;
		}
		else
		{
			$Sellprice = $_POST["Sellprice"];
		}
		if(empty($_POST["od"]))
		{
			$err_od="*Requested date Required";
			$err=true;
		}
		else
		{
			$od=$_POST["od"];
		}
		if(empty($_POST["comment"])){
			$err_comment="*comment Required";
			$err = true;
		}
		else
		{
			$comment = $_POST["comment"];
		} 
		if(empty($_POST["passwood"]))
		{
			$err_passwood="*Passwood Required";
			$err = true;
		}
		else if (strlen($_POST["passwood"])<=8)
		{
			$err_passwood="Passwood must be greater then or equal 8";
			$err=true;
		}
		else
		{
			$passwood = $_POST["passwood"];
		}
		if(!$err)
		{
			echo $_POST["foodname"]."<br>";
			echo $_POST["Sellprice"]."<br>";
			echo $_POST["od"]."<br>";
			echo $_POST["shift"]."<br>";
			echo $_POST["comment"]."<br>";
			echo $_POST["passwood"]."<br>";
		}
		

	}		
?>
<html>
    <head>
	<title>File upload</title>
    </head>
	<body>
	<fieldset>
	<form action="" method="post">
		<table align="center">
			<tr>
				<th colspan = 3>Income Recood</th>
			</tr>
			<tr>
				<td><b>Food Name </b></td>
				<td>:</td>
				<td><input type="text" name="foodname" value = "<?php echo $foodname; ?>" placeholder="Food name here "></td>
				<td><span><?php echo $err_foodname;?></span></td>
			</tr>
			<tr>
				<td><b>Enter Sell Price </b></td>
				<td>:</td>
				<td><input type="Sell Price" name="Sell Price" value = "<?php echo $Sellprice; ?>"placeholder="Your Sell price here"></td>
				<td><span><?php echo $err_Sellprice;?></span></td>
			</tr>
			<tr>
				<td><b>Enter order date</b></td>
				<td>:</td>
				<td><input type="date" name="od" value = "<?php echo $od; ?>" placeholder="Your Requested date here"></td>
				<td><span><?php echo $err_od;?></span></td>
			</tr>
			
			<tr>
				<td><b>Enter any comment</b></td>
				<td>:</td>
				<td><textarea name="comment" placeholder ="Your comment here"><?php echo $comment; ?></textarea></td>
				<td><span><?php echo $err_comment;?></span></td>
			</tr>
			<tr>
				<td><b>Enter a passwood </b></td>
				<td>:</td>
				<td><input type="passwood" name="passwood" value="<?php echo $passwood;?>" placeholder="Your passwood here"></td>
				<td><span><?php echo $err_passwood;?></span></td>
			</tr>
			<tr>
				<td><b>Month</b></td>
				<td>:</td>
				<td>
					<select name="">
					    <option selected disabled value ="">SELECT</option>
						<option value ="">JANUARY</option>
						<option value ="">FEBRUARY</option>
						<option value ="">MARCH</option>
						<option value ="">APRIL</option>
						<option value ="">MAY</option>
						<option value ="">JUNE</option>
						<option value ="">JULY</option>
						<option value ="">AUGUST</option>
						<option value ="">SEPTEMBER</option>
						<option value ="">OCTOBER</option>
						<option value ="">NOVEMBER</option>
						<option value ="">DECEMBER</option>
				</td>
			</tr>
			<tr>
			    <form method="POST" action="check.php" enctype="multipart/form-data">
			    <td><b>Statement</b></td>
				<td>:</td>
				<td><input type="file" name="myfile"></td>
			</tr>
			<tr>
				<td align="center" colspan="3"><input type="submit" name="submit"value="Confirm"></td>
			</tr>
					
		</form>
		</table>
	</form>
	</fieldset>
	</body>
</html>