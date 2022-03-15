<?php
$fname="";
$err_fname=""; 
$fid="";
$err_fid="";
$reason="";
$err_reason="";
$password="";
$err_password="";
$err=false;
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		if(empty($_POST["fname"]))
		{
			$err_fname="*Food name Required";
			$err=true;
		}
		else if (strlen($_POST["fname"])<=3)
		{
			$err_fname="Food name must be greater then 3";
			$err=true;
		}
		else
		{  
			$fname=$_POST["fname"];
		}
		if(empty($_POST["fid"]))
		{
			$err_fid="*Food id Required";
			$err = true;
		}
		else
		{
			$fid = $_POST["fid"];
		}
		if(empty($_POST["password"]))
		{
			$err_password="*Password Required";
			$err = true;
		}
		else if (strlen($_POST["password"])<=8)
		{
			$err_password="Password must be greater then or equal 8";
			$err=true;
		}
		else
		{
			$password = $_POST["password"];
		}
		if(!$err)
		{
			echo $_POST["fname"]."<br>";
			echo $_POST["fid"]."<br>";
			echo $_POST["reason"]."<br>";
			echo $_POST["password"]."<br>";
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
		<th colspan = 3>Delete Food Menu</th>
	</tr>
	<tr>
		<td><b>Food Name </b></td>
		<td>:</td>
		<td><input type="text" name="fname" value = "<?php echo $fname; ?>" placeholder="Food name here "></td>
		<td><span><?php echo $err_fname;?></span></td>
	</tr>
	<tr>
		<td><b>Food Code </b></td>
		<td>:</td>
		<td><input type="fid" name="fid" value = "<?php echo $fid; ?>"placeholder="Food code here"></td>
		<td><span><?php echo $err_fid;?></span></td>
	</tr>
	<tr>
						<td><b>Reason</b></td>
						<td><b>:</b></td>
						<td>
							<textarea name="reason" placeholder="Reason"><?php echo $reason;?></textarea>
						</td>
						<td><span><?php echo $err_reason;?></span></td>
					</tr>
	<tr>
		<td><b>Password </b></td>
		<td>:</td>
		<td><input type="password" name="password" value="<?php echo $password;?>" placeholder="Your password here"></td>
		<td><span><?php echo $err_password;?></span></td>
	</tr>
	<tr>
		<td align="center" colspan="3"><input type="submit" name="submit"value="Delete"></td>
	</tr>


</table>
</fieldset>
</body>
</html>