<html>

<head>
	<title>Connect</title>
</head>

<body>
	<center>
		<form method="post" action="<?php echo site_url('Login/UbahPaswd'); ?>">
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" placeholder="Masukkan username hotspoty" name="username"></td>
				</tr>
				<tr>
					<td>Old Password</td>
					<td><input type="text" placeholder="Masukkan password lama" name="old"></td>
				</tr>
				<tr>
					<td>New Password</td>
					<td><input type="text" placeholder="Masukkan Password Baru" name="pw"></td>
				</tr>
				<tr align="center">
					<td colspan="2"><button type="submit" value="Connect">Update</button></td>
				</tr>


			</table>

		</form>
	</center>

</body>

</html>
