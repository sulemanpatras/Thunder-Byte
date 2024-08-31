<!-- header -->
<?php
include "links/header.php";
?>
<!--  -->

<body>
    <div class="container">

        <!-- side-bar -->
        <?php
        include "links/side-bar.php";
        ?>
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
                            
                            <div class="formbold-main-wrapper">
                                <!-- Add-services form -->
                                <div class="formbold-form-wrapper">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                        <div class="formbold-input-flex">
                                            <div>
                                                <label for="firstname" class="formbold-form-label"> Category </label>
                                                <input type="text" name="category" id="firstname" placeholder="Category" class="formbold-form-input" required />
                                            </div>
                                            
                                        </div>

                                        <button class="formbold-btn" name="submit" style="background-color: #ff7782">
                                            Add
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- php script start -->
                            <?php
                            include "../auth/conn.php";
                            if (isset($_POST['submit'])) {
                                include "../auth/conn.php";
                                // Check if the database connection is successful
                                if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }
                                // get values from from POST method
                                $category = $_POST['category'];

                                // Validate form input
                                if (empty($category) ) {
                                    echo '<script type="text/javascript">alert("Please fill in all fields.");</script>';
                                    exit();
                                }
                                // insert into database
                                // Use prepared statement to prevent SQL injection
                                $stmt = mysqli_prepare($conn, "INSERT INTO category2 (category_name) VALUES (?)");

                                // Bind parameters
                                mysqli_stmt_bind_param($stmt, "s", $category);

                                // Execute the statement
                                 $result = mysqli_stmt_execute($stmt);

                                if ($result) {
                                    echo '<script type="text/javascript"> 
                    alert("Added successfully");
                    window.location.href="category2.php"; 
                </script>';
                                } else {
                                    echo '<script type="text/javascript">alert("something went wrong");</script>';
                                }

                                // Close the statement
                                mysqli_stmt_close($stmt);
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