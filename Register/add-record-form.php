<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register</title>
</head>
<body>
<form action="insert.php" method="post">
	<p>
    	<label for="Name">Name:</label>
        <input type="text" name="name" id="Name">
    </p>
    <p>
    	<label for="address">Address:</label>
        <input type="text" name="addr" id="Address">
    </p>

    <p>
    	<label for="nic">NIC:</label>
        <input type="text" name="nic" id="nic">
    </p>

    <p>
    	<label for="occupation">Occupation:</label>
        <input type="text" name="occupation" id="occupation">
    </p>

    <p>
    	<label for="email">Email:</label>
        <input type="text" name="email" id="email">
    </p>

    <p>
    	<label for="username">Username:</label>
        <input type="text" name="username" id="username">
    </p>

    <p>
    	<label for="password">Password:</label>
        <input type="password" name="password" id="password">
    </p>

    <p>
    	<label for="password_retype">Password (retype):</label>
        <input type="text" name="password_retype" id="password_retype">
    </p>

    <input type="submit" value="Add Records">
</form>
</body>
</html>