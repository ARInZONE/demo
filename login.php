<?php
	
	include "conn.php";
	 if(isset($_POST["submit"]))
        {
			// prepare and bind
			$stmt = $conn->prepare("INSERT INTO login (name, pass, fname, lname) VALUES (?, ?, ?, ?)");
			$stmt->bind_param("ssss", $name, $pass, $fname, $lname);
			$fname = $_POST['firstname'];
			$lname = $_POST['lastname'];
			$pass = $_POST['password'];
			$name = $_POST['username'];
			$stmt->execute();
			$stmt->close();
		}
	$conn->close();

?>
<!DOCTYPE html>
<html>
<head>
	<title>TAWK live chat</title>
</head>
<body>
	
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c4ebd9251410568a108efbf/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
				<h1>LOGIN</h1>
		<form action="login.php" method="post">
		Name: <input type="text" name="username"><br>
		First Name: <input type="text" name="firstname"><br>
		Last Name: <input type="text" name="lastname"><br>
		password: <input type="password" name="password"><br>
		<input type="submit" name="submit" value="submit">
		</form>

</body>
</html>
