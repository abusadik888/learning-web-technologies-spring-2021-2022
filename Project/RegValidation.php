<?php
	$id="";
	$err_id="";
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$email="";
	$err_email="";
	$number="";
	$err_number="";
	$nid="";
	$err_nid="";
	$pass="";
	$err_pass="";
	$type="";
	$err_type="";
	$gender="";
	$err_gender="";
	$status="";

	
	$hasError=false;

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		if(empty($_POST["name"]))
		{
			$err_name="Name Required";
			$hasError = true;
		}
		
		else if(strlen($_POST["name"]) <=2)
		{
			$err_name="Name Must be greater than 2";
			$hasError = true;
		}
		
		else
		{
			$name=htmlspecialchars($_POST["name"]);
		}
		
		if(empty($_POST["username"]))
		{
			$err_uname="Username Required";
			$hasError = true;
		}
		
		else if (strlen($_POST["username"])<=2)
		{
			$err_uname="User name must be greater then 2";
			$hasError=true;
		}
		
		else
		{
			$uname=$_POST["username"];
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
		
		if(empty($_POST["number"]))
		{
			$err_number="Phone Number Required";
			$hasError = true;
		}
		
		else if (strlen($_POST["number"])<=11)
		{
			$err_number="User name must be greater then 10";
			$hasError=true;
		}
		
		else
		{
			$number=$_POST["number"];
		}
		
		if(empty($_POST["nid"]))
		{
			$err_nid="NID card Number Required";
			$hasError = true;
		}
		
		else if (strlen($_POST["nid"])<=10)
		{
			$err_nid="NID card number must be greater then 9";
			$hasError=true;
		}
		
		else
		{
			$nid=$_POST["nid"];
		}
		
		if(empty($_POST["password"]))
		{
			$err_pass="Password Required";
			$hasError = true;
		}
		
		else if (strlen($_POST["password"])<=8)
		{
			$err_pass="Password must be greater then or equal 8";
			$hasError=true;
		}
		
		else
		{
			$pass = $_POST["password"];
		}
		
		if(!isset($_POST["gender"]))
		{
			$err_gender="Gender Required";
			$hasError = true;
		}
		
		else
		{
			$gender = $_POST["gender"];
		}
		
		
		if(!$hasError)
		{
			echo $name."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["number"]."<br>";
			echo $_POST["nid"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["gender"]."<br>";
			
		}
	}
?>
<html>
	<body>
		<fieldset>
			<form action="" onsubmit="return validate()" method="post">
				<table align="center">
					<tr>
						<td>Name: </td>
						<td><input type="text" id="name" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span id="err_name"><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td>Username: </td>
						<td><input type="text" id="username" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span id="err_uname"><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><input type="text" id="email" name="email" value="<?php echo $email;?>" placeholder="Email"></td>
						<td><span id="err_email"><?php echo $err_email;?></span></td>
						
					</tr>
					<tr>
						<td>Phone Number: </td>
						<td><input type="tel" id="number" name="number" value="<?php echo $number;?>" placeholder="Phpne number"></td>
						<td><span id="err_number"><?php echo $err_number;?></span></td>
						
					</tr>
					<tr>
						<td>Nid: </td>
						<td><input type="number" id="nid" name="nid" value="<?php echo $nid;?>" placeholder="nid"></td>
						<td><span id="err_nid"><?php echo $err_nid;?></span></td>
						
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" id="password" name="password" value="<?php echo $pass;?>" placeholder="Password"></td>
						<td><span id="err_pass"><?php echo $err_pass;?></span></td>
					</tr>
					
					<tr>
						<td>Gender: </td>
						<td><input type="radio" id="male" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input id="female" <?php if($gender == "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
						<td><span id="err_gender"><?php echo $err_gender;?></span></td>
					</tr>
					<tr>
					  <td>Degree: </td>
					  <td>
					   <input type="checkbox" name="" value=""> SSC
					   <input type="checkbox" name="" value=""> HSC
					   <input type="checkbox" name="" value=""> BSc <br>
					   </td>
					   </tr>
					<tr>
						<td align="right" colspan="2"><input type="submit" value="Register"></td>
					</tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>