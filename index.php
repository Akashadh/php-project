<!DOCTYPE html>
<html>
<head>
	<title> student management system</title>
</head>
<body>
	<h3 text align="right" style="margin: 20px"><a href="login.php"> Admin login</a></h3>
	<H1><marquee behavior="alternate">welcome to sudent management system</marquee></H1>
	<hr>
	<form method="POST" action="index.php">
	<h3><b>Student Information</b></h3>
	<label for="rollno">Roll number</label>
	<input type="text" name="rollno" required="required"><br><br>
	<label style="margin: 10px" for="standard">Standard</label>
	<select name="standard">
		<option value="1th">1th</option>
		<option value="2nd">2nd</option>
		<option value="3rd">3rd</option>
		<option value="4th">4th</option>
		<option value="5th">5th</option>
		<option value="6th">6th</option>
		<option value="7th">7th</option>
		<option value="8th">8th</option>
		<option value="9th">9th</option>
		<option value="10th">10th</option>
	</select><br>
	<label for="sumbit"></label>
	<input type="submit" name="submit" value="show info">
		
	</form>


</body>
</html>