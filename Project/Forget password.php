<?php
$uname="";
$err_uname=""; 
$id="";
$err_id="";
$dob="";
$err_dob="";
$email="";
$err_email="";
$number="";
$err_number="";
$err=false;
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		if(empty($_POST["uname"]))
		{
			$err_uname="*User name Required";
			$err=true;
		}
		else if (strlen($_POST["uname"])<=3)
		{
			$err_uname="User name must be greater then 3";
			$err=true;
		}
		else
		{  
			$uname=$_POST["uname"];
		}
		if(empty($_POST["id"]))
		{
			$err_id="*id Required";
			$err = true;
		}
		else
		{
			$id = $_POST["id"];
		}
		if(empty($_POST["dob"]))
		{
			$err_dob="*Date of birth Required";
			$err=true;
		}
		else
		{
			$dob=$_POST["dob"];
		}
		if(!strpos($_POST["email"],"@"))
		{
			if(!strpos($_POST["email"],"."))
			$err_email="Email should contain '@' and '.' sequentially";
		}
		else
		{
			$email=$_POST["email"];
		}

		if(!$err)
		{
			echo $_POST["uname"]."<br>";
			echo $_POST["id"]."<br>";
			echo $_POST["dob"]."<br>";
			echo $_POST["email"]."<br>";
		}
		

	}		
?>
<html>
<head></head>
<body>
<fieldset>
<form action="" method="post">
<table align="center">
	<tr>
		<th colspan = 3>Give these Information</th>
	</tr>
	<tr>
		<td><b>User Name </b></td>
		<td>:</td>
		<td><input type="text" name="uname" value = "<?php echo $uname; ?>" placeholder="Your User name here "></td>
		<td><span><?php echo $err_uname;?></span></td>
	</tr>
	<tr>
		<td><b>Enter your ID </b></td>
		<td>:</td>
		<td><input type="id" name="id" value = "<?php echo $id; ?>"placeholder="Your id here"></td>
		<td><span><?php echo $err_id;?></span></td>
	</tr>
	<tr>
		<td><b>Enter your date of birth</b></td>
		<td>:</td>
		<td><input type="date" name="dob" value = "<?php echo $dob; ?>" placeholder="Your date of birth here"></td>
		<td><span><?php echo $err_dob;?></span></td>
	</tr>
	<tr>
		<td><b>Enter your email</b></td>
		<td>:</td>
		<td><input type="email" name="email" value = "<?php echo $email; ?>"placeholder ="Your email here"></td>
		<td><span><?php echo $err_email;?></span></td>
	</tr>
	<tr>
		<td align="center" colspan="3"><input type="submit" name="submit"value="Send verify link"></td>
	</tr>

</table>
</form>
</fieldset>
</body>
</html>