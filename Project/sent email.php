<?php
$cemail="";
$err_cemail=""; 
$subject="";
$err_subject="";
$massage="";
$err_massage="";

$err=false;
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		if(empty($_POST["cemail"]))
		{
			$err_cemail="*Customer Email Required";
			$err=true;
		}
		else if (strlen($_POST["cemail"])<=3)
		{
			$err_cemail="User name must be greater then 3";
			$err=true;
		}
		else
		{  
			$cemail=$_POST["cemail"];
		}
		
		if(!$err)
		{
			echo $_POST["cemail"]."<br>";
			echo $_POST["id"]."<br>";
			echo $_POST["rd"]."<br>";
			echo $_POST["shift"]."<br>";
			echo $_POST["reason"]."<br>";
			echo $_POST["password"]."<br>";
		}
		

	}		
?>
<html>
	<body>
	<fieldset>
	<form action="" method="post">
		<table align="center">
			<tr>
				<th colspan = 3>Sent Email to Customer</th>
			</tr>
			<tr>
				<td><b>Customer Email </b></td>
				<td>:</td>
				<td><input type="text" name="cemail" value = "<?php echo $cemail; ?>" placeholder="Enter Customer email here "></td>
				<td><span><?php echo $err_cemail;?></span></td>
			</tr>
			<tr>
				<td><b>Subject</b></td>
				<td>:</td>
				<td><textarea name="subject" placeholder ="Subject Here"><?php echo $subject; ?></textarea></td>
				<td><span><?php echo $err_subject;?></span></td>
			</tr>
			
			<tr>
				<td><b>Your Message</b></td>
				<td>:</td>
				<td><textarea name="massage" placeholder ="Your Massage Here"><?php echo $massage; ?></textarea></td>
				<td><span><?php echo $err_massage;?></span></td>
			</tr>
			
			<tr>
				<td align="center" colspan="3"><input type="submit" name="submit"value="Sent"></td>
			</tr>
		</table>
	</form>
	</fieldset>
	</body>
</html>