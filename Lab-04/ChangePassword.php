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
		<form method="post" action="ChangePasswordCheck.php" enctype="">
			<fieldset style="width: 20%;">
				<legend><b>CHANGE PASSWORD</b></legend>
				<table>
					<tr>
						<td>Current Password :</td>
						<tr></tr>
						<td><input type="text" name="Password" value="" ></td>
					</tr>
					<tr>
						<td><a style="color:green;">New Password :</a></td>
						<tr></tr>
						<td><input type="password" name="Password" value="" ></td>
					</tr>
                    <tr>
                    <td><a style="color:red;"> Retype New Password :</a></td>
						<tr></tr>
						<td><input type="Password" name="Conpassword" value="" ></td>
					</tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                   
					<tr>
						<td colspan="2">
							<input type="submit" name="" value="Submit">
							
						</td>
					</tr>
				</table>
			</fieldset>
		</form>

</body>
</html>
