<!DOCTYPE html>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Profile.css">

</head>
<body>

	
			<?php include 'Header.php'; ?>
	        


	        <form method="post">
	        	<div class="contentProfile">
	        		<?php include "Sidebar.php"; ?>
		<div class="divFieldset">
			<fieldset style="width: 500px;" class="fieldsetProfile">
			<?php if(isset($_POST['photo'])){?>
			<img src="Pictures/name.jpg" style="height: 100px; width: 100px; position: relative; left: 55%"><br>
		<?php }else{?>
			<img src="user.png" style="height: 100px; width: 100px; position: relative; left: 55%"><br>
		<?php }?>
			<input type="file" name="photo" style="position: relative; left: 55%">
			<table>
				<tr>
					<td style="text-align: right;">Name</td>
					<td>: <input type="text" name="name"></td>
				</tr>
				<tr>
					<td style="text-align: right;">Email</td>
					<td>: <input type="text" name="email" ></td>
				</tr>
				<tr>
					<td style="text-align: right;">Country</td>
					<td>: <input type="text" name="country"></td>
				</tr>
				<tr>
					<td style="text-align: right;">City</td>
					<td>: <input type="text" name="city"></td>
				</tr>
				<tr>
					<td style="text-align: right;">Phone</td>
					<td>: <input type="text" name="phone"></td>
				</tr>
				<tr>
					<td style="text-align: right;">Date of Birth</td>
					<td>: <input type="text" name="dob" style="width: 30px;"> / <input type="text" name="dob" style="width: 30px;"> / <input type="text" name="dob" style="width: 80px;"></td>
				</tr>
				<tr>
					<td style="text-align: right;">Gender</td>
					<td>: <input type="radio" name="gender" value="Male"><label>Male</label><input type="radio" name="gender" value="Female"><label>Female</label></td>
				</tr>
			</table><br>
		<div style="width: 300px; border-top: 2px solid gray;"></div><br>
		<input type="submit" name="save" value="Save">
		<input type="submit" name="delete" value="Delete">
		</fieldset>
		</div>
	        	</div>
	</form>


	        <?php include "Footer.php"; ?>
	

</body>
</html>