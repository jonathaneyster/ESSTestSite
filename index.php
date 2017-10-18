<html>
<head>
	<title>ESS Test Site</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">	
</head>
<body>
	<!--Navbar-->
	<nav class="navbar navbar-inverse bg-inverse navbar-static-top">
  		<a class="navbar-left nav-color" href="#"><img src="assets/1150logo.png" width="40" height="40" class="d-inline-block align-top" alt="">Eleven Fifty Academy</a>
	</nav>
	<!--Body-->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form action="submission.php" method="post">
					<p>First Name: <input type="text" name="firstname" required/></p>
					<p>Last Name: <input type="text" name="lastname" required/></p>
					<p>Resume Link: <input type="text" name="resume" required/></p>
					<p>DISC Link: <input type="text" name="disc" required/></p>
					<p>Trimetrix - Coaching: <input type="text" name="trimetrixcoaching" required/></p>
					<p>Trimetrix - Gap: <input type="text" name="trimetrixgap" required/></p>
					<p>Linkedin: <input type="text" name="linkedin" required/></p>
					<p>Github Username: <input type="text" name="github" required/></p>
					<p>Age: <input type="text" list="age" name="age" required/>
						<datalist id="age">
							<option value="16-24">
							<option value="25-30">
							<option value="31-35">
							<option value="36-40">
							<option value="41-45">
							<option value="46-50">
							<option value="51-59">
							<option value="60+">
						</datalist>
					</p>
					<p>Track: <input type="text" name="track" required/></p>
					<p>Phone Number: <input type="text" name="phonenumber" required/></p>
					<p>Are you registered with EmployUp? : 
						<input class="employup" type="radio" name="employup" value="Yes"/>Yes
						<input class="employup" type="radio" name="employup" value="No"/>No
					</p>
					<p>Last Date of Employment: <input type="text" name="dateofemployment" required/></p>
					<p>Target Salary: <input type="text" name="targetsalary" required/></p>
					<p>Benefits: <input type="text" list="benefits" name="benefits" required/>
						<datalist id="benefits">
							<option value="Yes">
							<option value="No">
							<option value="Preferred">
						</datalist>
					</p>
					<p>Are you willing to relocate for a job? (Check all that apply) : 
						<input type="checkbox" name="relocate" value="Bloomington"/>Bloomington
						<input type="checkbox" name="relocate" value="Lafayette"/>Lafayette
						<input type="checkbox" name="relocate" value="Fort Wayne"/>Fort Wayne
						<input type="checkbox" name="relocate" value="Evansville"/>Evansville
						<input type="checkbox" name="relocate" value="Other"/>Other						
					</p>										
					<button type="submit" value="Register" class="btn">Register</button>
				</form>
			</div>	
		</div>
	</div>	
</body>
</html>