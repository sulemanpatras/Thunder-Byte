<?php 
session_start();
include '../dashboard/auth/conn.php';
$showAlert = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    // Check if passwords match
    if ($password == $cpassword) {
        // Check if email format is valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Check password length
            if (strlen($password) >= 10) {
                // Check if the email already exists in the database
                $check_email = "SELECT * FROM `users` WHERE `email`='$email'";
                $result_email = mysqli_query($conn, $check_email);
                $num_email = mysqli_num_rows($result_email);

                if ($num_email > 0) {
                    // Email already exists, show alert
                    $showAlert = true;
                } else {
                    // Insert new user data into the database
                    $sql = "INSERT INTO `users` (`naam`, `email`, `password`, `cpsw`) VALUES ('$username', '$email','$password','$cpassword')";
                    $result = mysqli_query($conn, $sql);  
                    if ($result) {
                        $_SESSION['status'] = "Login Here.";
                        header('Location: ../index.php');
                    } else {
                        $showError = "Error: " . mysqli_error($conn);
                    }
                }
            } else {
                $showError = "Password should be at least 10 characters long";
            }
        } else {
            $showError = "Invalid email format";
        }
    } else {
        $showError = "Passwords do not match";
    }
}

mysqli_close($conn);
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SignUp</title>
</head>
<body>
<div class="container my-4">
    <h1 class="text-center">Signup to our website</h1>
    <?php if ($showAlert): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Warning!</strong> This email is already registered.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php if ($showError): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $showError; ?>
        </div>
    <?php endif; ?>
    <!-- <form action="signin.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword" required>
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
        <button type="submit" class="btn btn-primary">SignUp</button>
    </form> -->
    <section class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-8 col-xl-7 col-xxl-6"> <!-- Increased width for the form container -->
        <div class="card border border-light-subtle rounded-3 shadow-sm">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="text-center mb-3">
              <a href="#!">
                <img src="../assets/img/why-us.png" alt="BootstrapBrain Logo" width="300" height="150">
              </a>
            </div>
            <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Sign in to your account</h2>
            <form action="signin.php" method="post">
              <div class="row gy-2 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>
                    <label for="email" class="form-label">Username</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                    <label for="password" class="form-label">Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" name="password" required>
                    <label for="password" class="form-label">Password</label>
                  </div>
                </div>
                 <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="cpassword" name="cpassword" required>
                    <label for="password" class="form-label">Confirm Password</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid my-3">
                    <button class="btn btn-primary btn-lg" type="submit">Sign up</button>
                  </div>
                  <div class="col-12">
                    <p class="m-0 text-secondary text-center">Already have an account? <a href="login.php" class="link-primary text-decoration-none">Sign in</a></p> <!-- Fixed the "Sign in" link -->
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
