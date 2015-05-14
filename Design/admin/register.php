<HTML>
<HEAD>
<title>Admin Register</title>
<script>
	function validateForm(){
		var fields = ["firstname","surname","email","username","key"];
		var currentField = "";
		var goodColour ="#66cc66";
		var badColour = "#ff6666";
		for (var i = 0; i < fields.length; ++i) {
			currentField = document.getElementById(fields[i])
			if (currentField.value == null || currentField.value == "") {
				currentField.style.color = badColour;
				return false;
			}
			else {
				currentField.style.color = goodColour;
			}
		}
		var password = document.getElementById("password");
		var password2 = document.getElementById("password2");
		if (password.value == password2.value) {
			password2.style.color = goodColour;
		}
		else {
			password2.style.color = badColour;
			return false;
		}
	}
	
	function finalValidation() {
		var validation = validateForm();
		if (validation == false) {
			alert("Please check the data entered!");
			return false;
		}
		
	}
	
</script>
</HEAD>
<BODY>
<form method="post" name="signup" id="signup" onSubmit ="return finalValidation()" onkeyUp="return validateForm()" action="<?php echo $_SERVER['DOCUMENT_ROOT']; ?>/controllers/Admin.php?request=login">
<input type="text" name="firstname" id="firstname"  placeholder="First Name"><br>
<input type="text" name="surname" id="surname" placeholder ="Surname"><br>
<input type="text" name="email" id="email" placeholder="Email Address"><br>
<input type="text" name="username" id = "username" placeholder="Username"><br>
<input type="password" name="password" id ="password" placeholder="Password"><br>
<input type="password" name="password2" id = "password2" placeholder="Re-Type Password"><br>
<input type="password" name="key" id="key" placeholder="Key"><br>
<input type="submit" action="submit" value="Register">
</form>
</BODY>
</HTML>