<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord - TimeNTune</title>
    <!-- Favicons -->
    <link href="../../../userpanel/assets/img/logo.png" rel="icon">
    <link href="../../../userpanel/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!--  -->
    <!-- icon-links -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--  -->
    <!--  -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <!--  -->
    <!-- main -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!--  -->
    <!-- add-servies -->
    <link rel="stylesheet" href="../../assets/css/add-services.css">
    <!--  -->
    <!--  -->
    <link rel="stylesheet" href="../../assets/css/blogs.css">
    <!--  -->
</head>
<!--  -->

<body>
    <div class="container">

        <!-- side-bar -->
        <aside>

            <div class="top">
                <div class="logo">
                    <a href="../../dashboard.php">
                        <h2 style="color: #444444;">TimeNTune <span class="danger">.</span> </h2>
                    </a>
                </div>
                <div class="close" id="close_btn">
                    <span class="material-symbols-sharp">
                        close
                    </span>
                </div>
            </div>
            <!-- end top -->
            <div class="sidebar">

            <a href="../../dashboard.php">
         <span class="material-symbols-sharp">grid_view </span>
         <h3>Dashbord</h3>
      </a>
      <a href="../../mern.php" class="active">
          <span class="material-symbols-sharp">grid_view </span>
          <h3>Dashbord 2</h3>
        </a>
      <a href="../custumer.php">
         <span class="material-symbols-sharp">person_outline </span>
         <h3>custumers</h3>
      </a>
      <a href="../analytics.php">
         <span class="material-symbols-sharp">insights </span>
         <h3>Analytics</h3>
      </a>
   
      <a href="../services.php">
         <span class="material-symbols-outlined">linked_services</span>
         <h3>Services</h3>
      </a>
      <a href="../services2.php">
         <span class="material-symbols-outlined">linked_services</span>
         <h3>Services 2</h3>
      </a>
      <a href="../prices.php">
          <span class="material-symbols-outlined">linked_services</span>
          <h3>Prices</h3>
        </a>
      <a href="../prices2.php">
          <span class="material-symbols-outlined">linked_services</span>
          <h3>Prices 2</h3>
        </a>
        <a href="../category.php">
          <span class="material-symbols-sharp">linked_services </span>
          <h3>Category</h3>
        </a>
        <a href="../category2.php">
          <span class="material-symbols-sharp">linked_services </span>
          <h3>Category2</h3>
        </a>
        <a href="../portfolio.php">
          <span class="material-symbols-sharp">linked_services </span>
          <h3>Portfolio</h3>
        </a>
      <a href="../add-services.php">
         <span class="material-symbols-sharp">add </span>
         <h3>Add Services</h3>
      </a>
      <a href="../add-services2.php">
         <span class="material-symbols-sharp">add </span>
         <h3>Add Services 2</h3>
      </a>
      <a href="../add-prices.php">
          <span class="material-symbols-sharp">add </span>
          <h3>Add Prices</h3>
        </a>
      <a href="../add-prices2.php">
          <span class="material-symbols-sharp">add </span>
          <h3>Add Prices 2</h3>
        </a>
        <a href="../add-category.php">
          <span class="material-symbols-sharp">add </span>
          <h3>Add Category</h3>
        </a>
        <a href="../add-category2.php">
          <span class="material-symbols-sharp">add </span>
          <h3>Add Category 2</h3>
        </a>
        <a href="../add-portfolio.php">
          <span class="material-symbols-sharp">add </span>
          <h3>Add portfolio</h3>
        </a>
        <br><br><br><br><br>
      <a href="../logout.php">
         <span class="material-symbols-sharp">logout </span>
         <h3>logout</h3>
      </a>

            </div>

        </aside>
        <!-- --------------
          end aside
        -------------------- -->
        <!--  -->

        <!-- --------------
        start main part
      --------------- -->
        <main>
            <h1>Dashbord</h1>
            <div class="insights">


                <!-- users-list -->
                <div class="recent_order">
                    <h2>Add Services</h2>
                    <table>
                        <tbody>

                            <?php
                            include '../../auth/conn.php';

                            // Check if 'az' is set in the URL parameters
                            if (isset($_GET['az'])) {
                                $id = $_GET['az'];

                                // Fetch data for the specified service ID
                                $sql = "SELECT * FROM prices WHERE id='$id'";
                                $rs = mysqli_query($conn, $sql);

                                // Check if the service exists
                                if ($result = mysqli_fetch_array($rs)) {
                                    $price = $result['price'];
                                    $category = $result['category'];
                                    $service = $result['service'];
                                } else {
                                    echo "Service not found";
                                    exit();
                                }
                            } else {
                                echo "Invalid request";
                                exit();
                            }
                            ?>



                            <div class="formbold-main-wrapper">
                                <!-- Add-services form -->
                                <div class="formbold-form-wrapper">
                                    <form action="#" method="POST" enctype="multipart/form-data">

                                        <!-- price -->
                                        <div class="formbold-input-flex">
                                            <div>
                                                <label for="firstname" class="formbold-form-label"> price </label>
                                                <input type="text" name="price" id="firstname" placeholder="Service" class="formbold-form-input" required value="<?php echo $price; ?>" />
                                            </div>
                                        </div>
                                        <!-- end -->

                                        <!-- Category Selection -->
                                    

                                        <button class="formbold-btn" name="submit" style="background-color: #ff7782">
                                            Add
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- php script start -->
                            <?php

                            include '../../auth/conn.php';
                            if (isset($_POST['submit'])) {
                                include '../../auth/conn.php';
                           
                                $price = $_POST['price'];
                              
                                $sql = $sql = "UPDATE prices2 SET price='$price' WHERE id=$id";
                                $result = mysqli_query($conn, $sql);
                                if ($result) {
                                    echo "<script type='text/javascript'>alert('edit'); 
window.location.href = '../prices2.php'; 
</script>";
                                } else {
                                    echo "<script>alert('not edited');
</script>";
                                }
                            }
                            ?>

                            <!-- php script end -->
                        </tbody>
                    </table>
                </div>

        </main>


        <!------------------
         end main
        ------------------->

        <!----------------
        start right main 
      ---------------------->
        <div class="right">

            <div class="top">
                <button id="menu_bar">
                    <span class="material-symbols-sharp">menu</span>
                </button>

                <div class="theme-toggler">

                </div>
                <div class="profile">
                    <div class="info">
                        <p><b>Corunes</b></p>
                        <p>Admin</p>
                        <small class="text-muted"></small>
                    </div>
                    <div class="profile-photo">
                        <img src="../images/profile-1.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- main -->
    <script src="../assets/js/script.js"></script>
    <!--  -->
    <script src="../assets/js/add-services.js"></script>
</body>

</html>