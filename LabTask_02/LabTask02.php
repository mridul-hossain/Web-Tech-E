<!DOCTYPE html>
<html>
<head>
	<title>LabTask02</title>
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

	$nameErr = $emailErr = $genderErr = $degreeErr = $bgErr = $dobErr = "";
	$name = $email = $gender = $degree = $bg = $dob = "";

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

  $c=$_POST["degree"];

  if (empty($c) || count($c)<2) {
    $degreeErr = "* Please select any two!";
  } else {
    $degree = test_input($_POST["degree"]);
  }

  if (empty($_POST["bg"])) {
    $bgErr = "* Select your bloodgroup.";
  } else {
    $bg = test_input($_POST["bg"]);
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
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

	?>







	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label><span style="color: red">* Write everythimg in a single PHP script.</span></label>
		<div>
			<h1 style="font-size: large;">EXPERIMENT NAME</h1>
			<label>Designing HTML form using PHP with validation of users inputs</label>
			<h1 style="font-size: large;">OBJECTIVE</h1>
			<label>This assignment item is designed to give you some practice on validating user input using PHP.</label>
			<h1 style="font-size: large;">ASSESSMENT TASK</h1>
			<label>1. Design the following HTML form and perform the following validations</label><br>
			<fieldset style="width: 30%">
				<legend>INFORMATION</legend>
				<div class="names">
					<label>Name: </label><br><br>
					<label style="margin-bottom: 2px">Email: </label><br><br>
					<label>Gender: </label><br><br>
					<label>Degree: </label><br><br>
					<label>Blood Group: </label><br><br>
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
					<input type="checkbox" name="degree" id="ssc" value="SSC" style="position: relative; bottom: 8px">
					<label for="ssc" style="position: relative; bottom: 8px">SSC</label>
					<input type="checkbox" name="degree" id="hsc" value="HSC" style="position: relative; bottom: 8px">
					<label for="hsc" style="position: relative; bottom: 8px">HSC</label>
					<input type="checkbox" name="degree" id="bsc" value="BSc" style="position: relative; bottom: 8px">
					<label for="bsc" style="position: relative; bottom: 8px">BSc</label>
					<input type="checkbox" name="degree" id="msc" value="MSc" style="position: relative; bottom: 8px">
					<label for="msc" style="position: relative; bottom: 8px">MSc</label><span style="color: red; position: relative; bottom: 8px"> <?php echo $degreeErr;?></span><br><br>
					<select name="bg" style="position: relative; bottom: 8px">
						<option disabled="select" selected="select"></option>
						<option>A+</option>
						<option>A-</option>
						<option>B+</option>
						<option>B-</option>
						<option>O+</option>
						<option>O-</option>
						<option>AB+</option>
						<option>AB-</option>
					</select><span style="color: red; position: relative; bottom: 8px"> <?php echo $bgErr;?></span><br><br>

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

		<h1 style="font-size: large;">Output:</h1><br>

		<?php


		echo $name;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $gender;
		echo "<br>";
		echo $degree;
		echo "<br>";
		echo $bg;
		echo "<br>";
		echo $dob;


		?>


	</form>



	







</body>
</html>