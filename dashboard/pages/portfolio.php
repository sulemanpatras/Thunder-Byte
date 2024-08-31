<?php
include "links/header.php";
?>

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

            <!-- start male-users -->
            <div class="sales">
               <span class="material-symbols-sharp">trending_up</span>
               <div class="middle">

                  <div class="left">
                     <h3>Basic Services</h3>
                     <?php
              //  including database
              include "../auth/conn.php";
              // SQL query to get the total count of table rows where gender is 'Male'
              $sql = "SELECT COUNT(*) as total FROM services  WHERE category = 'basic'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                  echo '<h1>'  . $row["total"] . '</h1>';
                }
              } else {
                echo "0 results";
              }
              ?>
                  </div>
                  

               </div>
               <small></small>
            </div>
            <!-- end male-users -->

            <!-- start female-users -->
            <div class="expenses">
               <span class="material-symbols-sharp">trending_up</span>
               <div class="middle">

                  <div class="left">
                     <h3>Stander Services</h3>
                     <?php
              //  including database
              include "../auth/conn.php";
              // SQL query to get the total count of table rows where gender is 'Male'
              $sql = "SELECT COUNT(*) as total FROM services  WHERE category = 'stander'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                  echo '<h1>'  . $row["total"] . '</h1>';
                }
              } else {
                echo "0 results";
              }
              ?>
                  </div>
                  

               </div>
               <small></small>
            </div>
            <!-- end female-users -->
            <!-- start total-users -->
            <div class="income">
               <span class="material-symbols-sharp">trending_up</span>
               <div class="middle">

                  <div class="left">
                     <h3>EnterPrice Services</h3>
                     <?php
              //  including database
              include "../auth/conn.php";
              // SQL query to get the total count of table rows where gender is 'Male'
              $sql = "SELECT COUNT(*) as total FROM services  WHERE category = 'enterprice'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                  echo '<h1>'  . $row["total"] . '</h1>';
                }
              } else {
                echo "0 results";
              }
              ?>
                  </div>
                  

               </div>
               <small></small>
            </div>
            <!-- end total-users -->

         </div>

         <!-- users-list -->
         <div class="recent_order">
            <h2>Services List</h2>
            <table>
               <thead>
                  <tr>
                     <th> Id</th>
                     <th>Project Nmae</th>
                     <th>link</th>
                     <th>Media</th>
                     <th>Description</th>
                     <th>Update</th>
                     <th>Delete</th>
                  </tr>
               </thead>
               <?php
               // Include your database configuration file
               include"../auth/conn.php";

               // Assuming your table name is 'services'
               $query = "SELECT * FROM portfolio";
               $result = mysqli_query($conn, $query);

               echo '<tbody>';

               if ($result) {
                  while ($row = mysqli_fetch_assoc($result)) {
                     echo '<tr>';
                     echo '<td>' . $row['id'] . '</td>';
                     echo '<td>' . $row['naam'] . '</td>';
                     echo '<td>' . $row['link'] . '</td>';
                    //  echo '<img src="$row['link']" alt="">';
                     echo '<td>' . $row['image'] . '</td>';
                     echo '<td>' . $row['description'] . '</td>';
                     echo '<td><a class="success" href="up-del/protfolio-update.php?az=' . $row['id'] . '">Update</a></td>';
                     echo '<td><a class="warning" href="up-del/portfolio-delete.php?delete=' . $row['id'] . '">Delete</a></td>';
                     echo '</tr>';
                  }

                  // Free result set
                  mysqli_free_result($result);
               } else {
                  echo 'Error executing query: ' . mysqli_error($conn);
               }

               echo '</tbody>';

               // Close the database connection
               mysqli_close($conn);
               ?>


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
               <!-- <span class="material-symbols-sharp active">light_mode</span> -->
               <!-- <span class="material-symbols-sharp">dark_mode</span> -->
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
</body>

</html>