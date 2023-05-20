<?php
include "Login_dbo.php";
include "header.php";

if(isset($_SESSION['username'])){
	header("Location:index_In.php");
}
?>
	<script type="text/javascript">
		function regAlert(){
			var password = document.getElementById("psw").value;
			var retpassword = document.getElementById("retpsw").value;
			if(password == retpassword){
				alert("Registration done! Please login");
			}
			else{
				alert("Please input same password");
			}
		}
	</script>
<div class="container mn-vh-100 d-flex justify-content-center align-items-center">
        <form action="registration_dbo.php" method="post" class="was-valid">
            <div class="registration" style="margin: 10px">
                <h1>Registration</h1>
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="psw" placeholder="Enter password" name="password" required>
                <label for="retpassword" class="form-label">Confirm password:</label>
                <input type="password" class="form-control" id="retpsw" placeholder="Renter password" name="retpassword" required>
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
                <label>Birthday:</label>
                <input type="date" class="form-control" id="dob" placeholder="Enter birthday" name="dob" required>
            </div>
            <div class="reginfo">
                <input type="radio" class="form-check-input" style='margin: 2px; text-align: center' name="gender" value="male">Male</input>
                <input type="radio" class="form-check-input" style='margin: 2px; text-align: center' name="gender" value="female">Female</input>
            </div>
            <div>
                <label class="form-check-label" style="text-align: center">
                    <input class="form-check-input" style="margin: 5px" type="checkbox" name="terms"> I agree with the<a href="#"> Terms and Conditions</a>
                </label>
            </div>
        <div>
            <input type="submit" class="btn btn-primary" style="margin: 5px" name="submit" onclick="regAlert()" value="Sign In">
        </div>
        </form>
</div>
<?php
include "footer.php";
?>

