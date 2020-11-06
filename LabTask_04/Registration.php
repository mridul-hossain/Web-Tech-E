<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
			.names{
				width: 100px;
				text-align: right;
				margin: auto;
				float: left;
			}
			.items{
				width: 500px;
				margin-left: 105px;
				text-align: left;
				vertical-align: top;
			}
			.line{
				width: 400px;
				border-top: 2px solid black;
			}
	</style>
</head>
<body>



	<?php

	$nameErr = $emailErr = $genderErr = $usernameErr = $passwordErr = $dobErr = $cpasswordErr ="";
	$name = $email = $gender = $username = $password = $dob = $cpassword = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$x=$_POST["name"];
  if (empty($x) || !preg_match("/^[a-zA-Z\s]+$/", $x) || str_word_count($x)<2) {
    $nameErr = "* Give a valid name.";
  } else {
    $name = test_input($_POST["name"]);
  }
  $e=$_POST["email"];

  if (empty($e)) {
    $emailErr = "* Type a valid Email.";
  } else {
    $email = test_input($_POST["email"]);
  }

  $c=$_POST["username"];

  if (empty($c)) {
    $usernameErr = "* Please select give a username!";
  } else {
    $username = test_input($_POST["username"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "* Please give a password.";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "* Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["dob"])) {
    $dobErr = "* Type your valid birthdate.";
  } else {
    $dob = test_input($_POST["dob"]);
  }

  if (empty($_POST["password"]) || $_POST["password"] != $_POST["cpassword"]) {
    $cpasswordErr = "* Password doesn't match.";
  } else {
    $password = test_input($_POST["cpassword"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

	?>



	<?php include 'Header.php'; ?>




	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">



		<div style="position: relative; padding-left: 30%">
			<fieldset style="width: 30%">
				<legend>REGISTRATION</legend>
				<div class="names">
					<label>Name: </label><br><br>
					<label style="margin-bottom: 2px">Email: </label><br><br>
					<label>Gender: </label><br><br>
					<label>User Name: </label><br><br>
					<label>Password: </label><br><br>
					<label>Confirm Password: </label><br><br>
					<label>Date of Birth: </label><br><br>
				</div>
				<div class="items">
					<input type="text" name="name"><span style="color: red"> <?php echo $nameErr;?></span><br><br>
					<input type="text" name="email" style="position: relative; bottom: 3px"><span style="color: red"> <?php echo $emailErr;?></span><br><br>
					<input type="radio" id="male" name="gender" value="Male" style="position: relative; bottom: 6px">
					<label for="male" style="position: relative; bottom: 6px">Male</label>
					<input type="radio" id="female" name="gender" value="Female" style="position: relative; bottom: 6px">
					<label for="female" style="position: relative; bottom: 6px">Female</label>
					<input type="radio" id="other" name="gender" value="Other" style="position: relative; bottom: 6px">
					<label for="other" style="position: relative; bottom: 6px">Other</label><span style="color: red; position: relative; bottom: 6px"> <?php echo $genderErr;?></span><br><br>
					<input type="text" name="username" style="position: relative; bottom: 8px"><span style="color: red; position: relative; bottom: 8px"> <?php echo $usernameErr;?></span><br><br>
					<input type="text" name="password" style="position: relative; bottom: 8px"><span style="color: red; position: relative; bottom: 8px"> <?php echo $passwordErr;?></span><br><br>
					<input type="text" name="cpassword" style="position: relative; bottom: 8px"><span style="color: red; position: relative; bottom: 8px"> <?php echo $cpasswordErr;?></span><br><br>

					<div style=" float: left; margin-left: 12px"><label style="position: relative; bottom: 18px;">dd</label></div>
					<div style=" float: left; margin-left: 28px"><label style="position: relative; bottom: 18px;">mm</label></div>
					<div style=" float: left; margin-left: 38px"><label style="position: relative; bottom: 18px;">yyyy</label></div><br>





					<div style="position: relative; bottom: 20px">
						<input type="text" name="dob" style="width: 30px; float: left;">
					<label style="float: left;">&nbsp/&nbsp</label>
					<input type="text" name="dob" style="width: 30px; float: left;">
					<label style="float: left;">&nbsp/&nbsp</label>
					<input type="text" name="dob" style="width: 80px; float: left;">
					</div><span style="color: red; position: relative; bottom: 20px"> <?php echo $dobErr;?></span>

				</div><br>
				<div class="line"></div><br>
				<input type="submit" name="Submit" style="position: relative; float: left;">
			</fieldset>
		</div>
		


	</form>






	



			<?php include 'Footer.php'; ?>

</body>
</html>