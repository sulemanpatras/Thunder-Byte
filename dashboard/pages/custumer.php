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
      </div>

      <!-- users-list -->
      <div class="recent_order">
        <h2>Users List</h2>
        <table>
          <thead>
            <tr>
              <th>User Id</th>
              <th>Name</th>
              <th>Email</th>
            </tr>
          </thead>
          </thead>
          <?php
          // Include your database configuration file

          // Assuming your table name is 'services'
          include "../auth/conn.php";
          $query = "SELECT * FROM users";
          $result = mysqli_query($conn, $query);

          echo '<tbody>';

          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<tr>';
              echo '<td>' . $row['id'] . '</td>';
              echo '<td>' . $row['naam'] . '</td>';
              echo '<td>' . $row['email'] . '</td>';
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