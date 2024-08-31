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
                                                <label for="firstname" class="formbold-form-label"> Project Name </label>
                                                <input type="text" name="name" id="firstname" placeholder="Service" class="formbold-form-input" required />
                                            </div>

                                        </div>



                                        <div>
                                            <label for="lastname" class="formbold-form-label"> Link </label>
                                            <input type="text" name="link" id="price" placeholder="www.xyz.com" class="formbold-form-input" required />
                                        </div>

                                        <div>
                                            <label for="message" class="formbold-form-label"> Description </label>
                                            <textarea rows="6" name="message" id="message" placeholder="Type your Description" class="formbold-form-input" required></textarea>
                                        </div>

                                        <div class="formbold-input-flex">
                                            <div>
                                                <label for="email" class="formbold-form-label"> image </label>
                                                <input type="file" name="img" id="img" accept=".jpg, .jpeg, .png" required class="formbold-form-input" />
                                            </div>
                                        </div>

                                        <button class="formbold-btn" name="submit" style="background-color: #ff7782">
                                            Add
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- PHP script for handling form submission and database insertion -->
                            <?php

                            if (isset($_POST['submit'])) {
                                // Include your database configuration file
                                include "../auth/conn.php";

                                // Get form data
                                $name = $_POST['name'];
                                $link = $_POST['link'];
                                $description = $_POST['message'];

                                // File upload handling
                                $uploadDirectory = "assets/upload/"; // Specify your upload directory
                                $uploadedFile = "../" . $uploadDirectory . basename($_FILES['img']['name']);
                                $path = $uploadDirectory . basename($_FILES['img']['name']);


                                if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadedFile)) {
                                    // File uploaded successfully, continue with database insertion
                                    // You should perform additional validation and sanitation on user input

                                    // Use prepared statement to prevent SQL injection
                                    $stmt = mysqli_prepare($conn, "INSERT INTO portfolio (naam, image, link, description) VALUES (?,?,?,?)");
                                    // Check if the prepare statement succeeded
                                    if ($stmt) {
                                        // Bind parameters
                                        mysqli_stmt_bind_param($stmt, "ssss", $name, $path, $link, $description);
                                        // Execute the statement
                                        $result = mysqli_stmt_execute($stmt);

                                        if ($result) {
                                            echo '<script type="text/javascript">
alert("Portfolio item added successfully");
</script>';
                                        } else {
                                            echo '<script type="text/javascript">
alert("Error adding portfolio item");
</script>';
                                        }

                                        // Close the statement
                                        mysqli_stmt_close($stmt);
                                    } else {
                                        // Handle the case when preparing the statement fails
                                        echo "Error preparing statement: " . mysqli_error($conn);
                                    }
                                } else {
                                    echo '<script type="text/javascript">alert("Error uploading file");</script>';
                                }

                                // Close the database connection
                                mysqli_close($conn);
                            }
                            ?>

                            <!-- End of PHP script -->
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