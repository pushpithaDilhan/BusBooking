<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin-Home</title>
</head>
<body>
	<header>
		<h1>Welcome Admin</h1>
	</header>

	<nav>
		<a href="http://localhost/busbooking/index.html">log out</a>
	</nav>


	<input type="submit" value="View Busses" name="view_busses" onclick="parent.location=('busses.php')">
	<input type="submit" value="View Routes" name="view_routes" onclick="parent.location=('busroutes.php')">
	<input type="submit" value="View Users" name="view_users" onclick= "parent.location=('userlist.php')">



</body>
</html>

