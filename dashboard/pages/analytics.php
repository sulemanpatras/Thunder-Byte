<?php
include "links/header.php";
?>

<body>
  <div class="container">
    <?php
    include "links/side-bar.php";
    ?>

    <!-- --------------
        start main part
      --------------- -->

    <main>
      <h1>Dashbord</h1>
      <div class="insights">

        <!-- total Orders start -->
        <div class="sales">
          <span class="material-symbols-sharp">shopping_cart</span>
          <div class="middle">

            <div class="left">
              <h3>Total Orders</h3>
              <?php
              //  including database
              include '../auth/conn.php';
              // SQL query to get total count of table rows
              $sql = "SELECT COUNT(*) as total FROM checkout_details";
              $result = $con->query($sql);

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
        </div>
        <!-- total Orders end -->

        <!-- total services start -->
        <div class="expenses">
          <span class="material-symbols-outlined">bookmark_added</span>
          <div class="middle">
            <div class="left">
              <h3>Total services</h3>
              <?php
              // SQL query to get total count of table rows
              $sql = "SELECT COUNT(*) as total FROM services";
              $result = $con->query($sql);

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
        </div>
        <!-- total services end -->

        <!-- total sales start -->
        <div class="income">
          <span class="material-symbols-outlined">check_circle</span>
          <div class="middle">

            <div class="left">
              <h3>Total Salas</h3>
              <?php
              $sql = "SELECT price FROM checkout_details";
              $result = $con->query($sql);

              if ($result) {
                $totalPrice = 0;
                $total = $result->num_rows > 0;
                while ($row = mysqli_fetch_assoc($result)) {
                  $servicePrice = $row['price'];
                  $quantity = $total;

                  // Calculate subtotal for the current row
                  $subtotal = $servicePrice * $quantity;

                  // Add subtotal to the total
                  $totalPrice += $subtotal;
                }

                // Output or use the total price for all rows
                echo '<h1>$' . $totalPrice . '</h1>';
              } else {
                // Handle query execution error
                echo 'Error: ' . $con->error;
              }
              ?>
            </div>
            <!-- total price end -->
          </div>
        </div>


      </div>
      <!-- end insights -->
      <div class="recent_order">
        <h2>Orders List</h2>
        <table>
          <thead>
            <tr>
              <th>Order Id</th>
              <th>Custumer Email</th>
              <th>Category</th>
              <th>Service</th>
              <th>Price</th>
            </tr>
          </thead>

          <?php


          $query = "SELECT * FROM checkout_details";
          $result = mysqli_query($con, $query);

          echo '<tbody>';

          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<tr>';
              echo '<td>' . $row['id'] . '</td>';
              echo '<td>' . $row['email'] . '</td>';
              echo '<td class="primary">' . $row['category'] . '</td>';
              echo '<td class="warning">' . $row['service'] . '</td>';
              echo '<td>' . $row['price'] . '</td>';
              echo '</tr>';
            }
            // Free result set
            mysqli_free_result($result);
          } else {
            echo 'Error executing query: ' . mysqli_error($con);
          }

          echo '</table>';


          ?>

          </tbody>

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

      <div class="sales-analytics">
        <h2>Sales Analytics</h2>

        <div class="item onlion">
          <div class="icon">
            <span class="material-symbols-sharp">shopping_cart</span>
          </div>
          <div class="right_text">
            <div class="info">
              <h3>Engine Swapp Orders</h3>
              <small class="text-muted">24 Hours</small>
            </div>
            <h5 class="danger">-</h5>

            <?php
            // SQL query to get total count of table rows
            $sql = "SELECT COUNT(*) as total FROM checkout_details WHERE category = 'Engine Swap'";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
              // Output data of each row
              while ($row = $result->fetch_assoc()) {

                echo '<h3>'  . $row["total"] . '</h3>';
              }
            } else {
              echo "0 results";
            }
            ?>
          </div>
        </div>
        <div class="item onlion">
          <div class="icon">
            <span class="material-symbols-sharp">shopping_cart</span>
          </div>
          <div class="right_text">
            <div class="info">
              <h3>Tune Orders</h3>
              <small class="text-muted">Last seen 2 Hours</small>
            </div>
            <h5 class="success">-</h5>
            <?php
            // SQL query to get total count of table rows
            $sql = "SELECT COUNT(*) as total FROM checkout_details WHERE category = 'Tune'";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
              // Output data of each row
              while ($row = $result->fetch_assoc()) {

                echo '<h3>'  . $row["total"] . '</h3>';
              }
            } else {
              echo "0 results";
            }
            ?>
          </div>
        </div>
        <div class="item onlion">
          <div class="icon">
            <span class="material-symbols-sharp">shopping_cart</span>
          </div>
          <div class="right_text">
            <div class="info">
              <h3>Detailing Orders</h3>
              <small class="text-muted">24 Hours</small>
            </div>
            <h5 class="danger">-</h5>
            <?php
            // SQL query to get total count of table rows
            $sql = "SELECT COUNT(*) as total FROM checkout_details WHERE category = 'Detailing'";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
              // Output data of each row
              while ($row = $result->fetch_assoc()) {

                echo '<h3>'  . $row["total"] . '</h3>';
              }
            } else {
              echo "0 results";
            }
            ?>
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