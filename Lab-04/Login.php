<html>
<head>
	<title>FORM</title>
</head>
<body>
	<?php
		session_start();
		if(isset($_SESSION["validate"])){
			echo $_SESSION["validate"];
			session_destroy();
		}
	?>
		<form method="post" action="LoginCheck.php" enctype="">
			<fieldset style="width: 20%;">
				<legend><b>LOGIN</b></legend>
				<table>
					<tr>
						<td>User Name</td>
						<tr></tr>
						<td><input type="text" name="Id" value="" ></td>
					</tr>
					<tr>
						<td>Password</td>
						<tr></tr>
						<td><input type="password" name="Password" value="" ></td>
					</tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="checkbox" name = "Remember" value="">Remember Me</td>
                    </tr>
					<tr>
						<td>
							<input type="submit" name="" value="Submit">
							<a href="ChangePassword.php"> Forgot Password? </a>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>

</body>
</html>
