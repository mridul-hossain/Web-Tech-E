<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php include 'Header.php';?>

	<form>
		<div style="position: relative; padding-left: 30%">
			<fieldset style="width: 30%;">
			<legend>LOGIN</legend>
			<table>
				<tr>
					<td><label>User Name</label></td>
					<td><label>:</label><input type="text" name="name"></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><label>:</label><input type="text" name="password"></td>
				</tr>
			</table><br>
			<div style="width: 250px; border-top: 2px solid gray;"></div><br>
			<input type="checkbox" name="remember" id="remember">
			<label for="remember">Remember Me</label><br><br>
			<input type="submit" name="Submit">
			<a href="Password.php">Forget Password?</a>
		</fieldset>
		</div>
		
		

	</form>

	<?php include 'Footer.php'; ?>

</body>
</html>