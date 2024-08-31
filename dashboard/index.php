<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login - Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../userpanel/assets/img/logo.png" rel="icon">
  <link href="../userpanel/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- form css File -->
<link rel="stylesheet" href="assets/css/login.css">
  <!-- =======================================================
  * Template Name: Append
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
    
<div class="wrapper">
      <div class="title-text">
        <div class="title login">Login </div>
        <div class="title signup">Signup </div>
      </div>
      

      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="#" class="login" method="post">
            <div class="field">
              <input type="text" name="username" placeholder="User Name" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="pass-link"><a href="#">Forgot password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="login" value="Login">
            </div>
            <div class="signup-link">Not a member? <a href="">Signup now</a></div>
          </form>

          <?php
if (isset($_POST['login'])) {
    include"auth/conn.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use prepared statement to prevent SQL injection
    $stmt = mysqli_prepare($conn, "SELECT name, password FROM admin WHERE name = ? LIMIT 1");

    // Bind parameter
    mysqli_stmt_bind_param($stmt, "s", $username);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Bind the result variables
    mysqli_stmt_bind_result($stmt, $dbUsername, $dbPassword);

    // Fetch the result
    mysqli_stmt_fetch($stmt);

    // Verify the password
    if ($password == $dbPassword) {
        echo '<script type="text/javascript"> 
            window.location.href="dashboard.php" 
            </script>';
    } else {
        echo '<script type="text/javascript">alert("Invalid username or password");</script>';
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
?>

          <form action="#" class="signup" method="post">
            <div class="field">
              <input type="text" name="user" placeholder="User Name" required>
            </div>
            <div class="field">
              <input type="text" name="email" placeholder="Email Address" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="field">
              <input type="password" name="confirm-password" placeholder="Confirm password" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="submit" value="Signup">
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--  -->
    <!--  -->
    <!-- php script sign-up form -->
    <?php
if (isset($_POST['submit'])) {
    include"auth/conn.php";

    $username = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirm-password'];

    if ($password == $confirmpassword) {
        // Use prepared statement to prevent SQL injection
        $stmt = mysqli_prepare($conn, "INSERT INTO admin (name, email, password) VALUES (?, ?, ?)");
        
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);

        // Execute the statement
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo '<script type="text/javascript"> 
            window.location.href="dashboard.php" 
            </script>';
        } else {
            echo '<script type="text/javascript">alert("Account not created");</script>';
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo '<script type="text/javascript">alert("Password does not match");</script>';
    }
}
?>
 <!-- php script close   sign-up form-->
</body>
    <script src="assets/js/login.js"></script>

</html>