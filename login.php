<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
	<?php include("external.php");?>

	<style>
		.login-button{
			background-color:#FFC017;
		}
		.login-button:hover{
			
			background-color:#FFC017;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		.input-fields{
			border:2px solid grey;
		}

		a{
			text-decoration: none;
		}
		
	</style>

    </head>

    <body style="background-color:#6D9AC4">
        
	<header style="margin-bottom:100px">
	
	</header>


	
	
	

<div class="container rounded-1 col-9 col-lg-3  pe-4 ps-4 pt-4 pb-4" style="background-color:white;">

<h2>Login</h2>
	<form action="index.php" method="post">
		<!-- Email input -->
		<div class="form-outline mb-4">
			<label class="form-label" for="email">Email</label>
			<div class="d-flex align-items-center">
			
			<input type="email" id="email" name="email" class="form-control input-fields"/>
			<i class='bx bx-envelope' style="margin-left:-30px"></i>
			
			
		</div>
		</div>
		
		<!-- Password input -->
		<div class="form-outline mb-4">
			<label class="form-label" for="password">Password</label>
			<div class="d-flex align-items-center">

				<input type="password" id="password" class="form-control input-fields"/>
				<i class='bx bxs-show' style="margin-left:-30px" onclick="showhide()" style="cursor:pointer"></i>

			</div>
			
		</div>
		
		<!-- 2 column grid layout for inline styling -->
		<div class="row mb-4">
			<div class="col">
				
    </div>

    <div class="">
		<!-- Simple link -->
		<a href="#">Forgot password?</a>
    </div>
</div>

<!-- Submit button -->
<button type="submit" class="btn btn-block mb-4 form-control login-button" name="login">Sign in</button>

<!-- Register buttons -->
<div class="text-center">
	<p>Not a member? <a href="register.php">Register</a></p>
</div>
</form>
</div>

<script>

	function showhide(){

		
		let password=document.getElementById("password");

		if(password.getAttribute("type")=="password"){

			password.setAttribute("type","text");
		}else{
			
			password.setAttribute("type","password");
		}
		
	}

</script>


</body>
</html>