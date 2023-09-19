<!Doctype html>
<html>
    <head>
        <title>Register</title>
        <?php include("external.php");?>

        <style>
          .register-button{
            background-color:#FFC017;
          }
          .register-button:hover{
            background-color:#FFC017;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

          }
        </style>
    </head>
    <body style="background-color:#6D9AC4">
        

    <div class="container rounded-1 w-50 pe-4 ps-4 pt-4 pb-4 mb-4 mt-4" style="background-color:white">

<h2>Register</h2>
    <form action="login.php" method="post">
    
  <!-- Name input -->
  <div class="form-outline mb-4">
      <label class="form-label" for="name">Full Name:</label>
    <input type="text" id="name" class="form-control" />
  </div>

  <!--Father's Name input -->
  <div class="form-outline mb-4">
      <label class="form-label" for="fname">Father's Name:</label>
    <input type="text" id="fname" class="form-control" />
  </div>

  <!--Surname input -->
  <div class="form-outline mb-4">
      <label class="form-label" for="surname">Surname:</label>
    <input type="text" id="surname" class="form-control" />
  </div>

  <!--GR no input -->
  <div class="form-outline mb-4">
      <label class="form-label" for="grno">GR NO:</label>
    <input type="text" id="grno" class="form-control" />
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
      <label class="form-label" for="email">Email:</label>
    <input type="email" id="email" class="form-control" />
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
      <label class="form-label" for="password">Password</label>
    <input type="password" id="password" class="form-control" />
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-block mb-4 w-25 register-button">Register</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Already Have an Account? <a href="Login.php">Login</a></p>
    
  </div>
</form>



    </div>
    </body>
</html>