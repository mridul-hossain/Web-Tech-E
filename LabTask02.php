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
					<input type="text" name="name"><br><br>
					<input type="text" name="email" style="position: relative; bottom: 3px"><br><br>
					<input type="radio" id="male" name="gender" value="Male" style="position: relative; bottom: 6px">
					<label for="male" style="position: relative; bottom: 6px">Male</label>
					<input type="radio" id="female" name="gender" value="Female" style="position: relative; bottom: 6px">
					<label for="female" style="position: relative; bottom: 6px">Female</label>
					<input type="radio" id="other" name="gender" value="Other" style="position: relative; bottom: 6px">
					<label for="other" style="position: relative; bottom: 6px">Other</label><br><br>
					<input type="checkbox" name="degree" id="ssc" value="SSC" style="position: relative; bottom: 8px">
					<label for="ssc" style="position: relative; bottom: 8px">SSC</label>
					<input type="checkbox" name="degree" id="hsc" value="HSC" style="position: relative; bottom: 8px">
					<label for="hsc" style="position: relative; bottom: 8px">HSC</label>
					<input type="checkbox" name="degree" id="bsc" value="BSc" style="position: relative; bottom: 8px">
					<label for="bsc" style="position: relative; bottom: 8px">BSc</label>
					<input type="checkbox" name="degree" id="msc" value="MSc" style="position: relative; bottom: 8px">
					<label for="msc" style="position: relative; bottom: 8px">MSc</label><br><br>
					<select name="bg" style="position: relative; bottom: 8px">
						<option>A+</option>
						<option>A-</option>
						<option>B+</option>
						<option>B-</option>
						<option>O+</option>
						<option>O-</option>
						<option>AB+</option>
						<option>AB-</option>
					</select><br><br>

					<div style=" float: left; margin-left: 12px"><label style="position: relative; bottom: 18px;">dd</label></div>
					<div style=" float: left; margin-left: 28px"><label style="position: relative; bottom: 18px;">mm</label></div>
					<div style=" float: left; margin-left: 38px"><label style="position: relative; bottom: 18px;">yyyy</label></div><br>





					<div style="position: relative; bottom: 20px">
						<input type="text" name="date" style="width: 30px; float: left;">
					<label style="float: left;">&nbsp/&nbsp</label>
					<input type="text" name="month" style="width: 30px; float: left;">
					<label style="float: left;">&nbsp/&nbsp</label>
					<input type="text" name="year" style="width: 80px; float: left;">
					</div>

				</div><br>
				<div class="line"></div><br>
				<input type="submit" name="Submit" style="position: relative; float: left;">
			</fieldset>
			
		</div>
	</form>



	<?php

	$nameErr = $emailErr = $genderErr = $degreeerr = $bgerr = $doberr = "";
	$name = $email = $gender = $degree = $bg = $dob = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["gender"])) {
    $website = "Please select any!";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

	?>







</body>
</html>