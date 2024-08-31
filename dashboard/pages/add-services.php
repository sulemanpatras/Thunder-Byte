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
                            <!-- php script start -->
                            <?php
                            $category = '';

                            if (isset($_POST['submit'])) {
                                $category = isset($_POST['category']) ? $_POST['category'] : ''; // Assign the value if it exists
                            } else {
                                //   echo '<script type="text/javascript">
                                //       alert("Error uploading file");
                                //       </script>';
                            }
                            ?>
                            <!-- php script end -->
                            <div class="formbold-main-wrapper">
                                <!-- Add-services form -->
                                <div class="formbold-form-wrapper">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                        <div class="formbold-input-flex">
                                            <div>
                                                <label for="firstname" class="formbold-form-label"> Service Name </label>
                                                <input type="text" name="servicename" id="firstname" placeholder="Service" class="formbold-form-input" required />
                                            </div>
                                            
                                        </div>

                                      
                                        <!-- Category Selection -->
                                        <div class="formbold-input-radio-wrapper">
                                            <label for="jobtitle" class="formbold-form-label"> Select Category </label>
                                            <div class="formbold-radio-flex">
                                                <!-- Engine Swap -->
                                                <div class="formbold-radio-group">
                                                    <label class="formbold-radio-label">
                                                        <input class="formbold-input-radio" type="radio" name="category" id="jobtitle" value="Basic" <?php echo ($category == 'basic') ? 'checked' : ''; ?>>
                                                        Basic
                                                        <span class="formbold-radio-checkmark"></span>
                                                    </label>
                                                </div>
                                                <!-- Tune -->
                                                <div class="formbold-radio-group">
                                                    <label class="formbold-radio-label">
                                                        <input class="formbold-input-radio" type="radio" name="category" id="jobtitle" value="Standard" <?php echo ($category == 'stander') ? 'checked' : ''; ?>>
                                                        Standard
                                                        <span class="formbold-radio-checkmark"></span>
                                                    </label>
                                                </div>
                                                <!-- Detailing -->
                                                <div class="formbold-radio-group">
                                                    <label class="formbold-radio-label">
                                                        <input class="formbold-input-radio" type="radio" name="category" id="jobtitle" value="Premier" <?php echo ($category == 'enterprice') ? 'checked' : ''; ?>>
                                                        Premier
                                                        <span class="formbold-radio-checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="message" class="formbold-form-label"> Description </label>
                                            <textarea rows="6" name="description" id="message" placeholder="Type your Description" class="formbold-form-input" required></textarea>
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
                                $servicename = $_POST['servicename'];
                                $category = $_POST['category'];
                                $description = $_POST['description'];

                                // Validate form input
                                if (empty($servicename) || empty($category) || empty($description)) {
                                    echo '<script type="text/javascript">alert("Please fill in all fields.");</script>';
                                    exit();
                                }
                                // insert into database
                                // Use prepared statement to prevent SQL injection
                                $stmt = mysqli_prepare($conn, "INSERT INTO services (naam, category, description) VALUES (?, ?, ?)");

                                // Bind parameters
                                mysqli_stmt_bind_param($stmt, "sss", $servicename, $category, $description);

                                // Execute the statement
                                $result = mysqli_stmt_execute($stmt);

                                if ($result) {
                                    echo '<script type="text/javascript"> 
                    alert("Added successfully");
                    window.location.href="services.php"; 
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