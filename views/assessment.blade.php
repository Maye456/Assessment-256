<html>
	<head>
		<title>Assessment View Page</title>
	</head>
	
	<body>
		<div align="center">
		<form action="dologin" method="post">
    		<h1>Login</h1> <br>
    		{{ csrf_field() }}
    		<!-- Begin firstName -->
    		<div>
    			<label for="firstname">First Name</label><span id="firstname_info" class="error-info"></span>
    		</div>
    		<div>
    			<input name="firstname" id="firstname" type="text" class="demo-input-box">
			</div>
			<!-- End firstName -->
			<br>
			<!-- Begin lastName -->
			<div>
    			<label for="lastname">Last Name</label><span id="lastname_info" class="error-info"></span>
    		</div>
    		<div>
    			<input name="lastname" id="lastname" type="text" class="demo-input-box">
			</div>
			<!-- End lastName -->
			<br>
			<!-- Begin email -->
			<div>
    			<label for="email">Email</label><span id="email_info" class="error-info"></span>
    		</div>
    		<div>
    			<input name="email" id="email" type="text" class="demo-input-box">
			</div>
			<!-- End email -->
			<br>
			<!-- Begin password -->
			<div>
    			<label for="password">Password</label><span id="password_info" class="error-info"></span>
    		</div>
    		<div>
    			<input name="password" id="password" type="text" class="demo-input-box">
			</div>
			<!-- End password -->
			<br>
			<div>
				<input type="submit" class="btnlogin">
			</div>
		</form>
		</div>
	</body>
</html>