<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="register.css">
  <script src="./index.js"></script>
</head>

<body>
  <div class="form-container">
    <form id="register" action="./requestHandler.php" method="POST">
      <h1 class="title">Register Account</h1>
      <hr>
      <div class="row">
        <div class="mb-3 col-lg-6">
          <label for="">First Name:</label>
          <input type="text" class="form-control" placeholder="First Name" name="Fname">
        </div>
        <div class="mb-3 col-lg-6">
          <label for="">Last Name:</label>
          <input type="text" class="form-control" placeholder="Last Name" name="Lname">
        </div>
      </div>
      <div class="mb-3">
        <label for="">Date of birth:</label>
        <input type="date" class="form-control DOB" placeholder="Date of birth" name="DOB" onchange="validateDOB()">
        <div class="invalid-feedback">
          Something went wrong, the format should be YYYY-MM-DD
        </div>
      </div>
      <div class="mb-3">
        <label for="">Phone Number:</label>
        <input type="text" class="form-control CNum" placeholder="Contact Number" name="CNum" onchange="validateCNum()">
        <div class="invalid-feedback">
          Something went wrong, the format should be 01xxxxxxxx
        </div>
      </div>
      <div class="mb-3">
        <label for="">Gender:</label>
        <select class="form-control" id="gender" class="form-control" name="Gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="">Email:</label>
        <input type="text" class="form-control email" placeholder="Email Address" name="Email" onchange="validateEmail()">
        <div class="invalid-feedback">
          Something went wrong, the format should be example@example.com
        </div>
      </div>
      <div class="mb-3">
        <label for="">Password:</label>
        <input class="form-control" type="password" id="password" placeholder="Password" name="Password" required onchange="validatePassword()">
      </div>
      <div class="mb-3 password">
        <label for="">Confirm Password:</label>
        <input class="form-control" type="password" id="confirm-password" placeholder="Confirm Password" name="Cpassword" required onchange="validatePassword()">
        <div class="invalid-feedback">
          Both password are different
        </div>
      </div>
      <div class="button-container">
        <button class="form__button btn btn-lg btn-dark" type="submit" id="myButton" name="SignUp">Continue</button>
      </div>
      <p class="form__text">
        <a class="for__link" href="login.php" id="linkLogin">Already have an account?Log in now!</a>
      </p>
    </form>
  </div>
</body>

</html>