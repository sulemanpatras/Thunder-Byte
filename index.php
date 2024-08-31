<?php
// Start the session (if not already started)
// session_start();
?>
<?php
include "master/header.php"; // Include header file if needed
?>

<?php if ($showError) : ?>
  <script>
    alert("<?php echo $showError ?>");
  </script>
<?php endif; ?>

<head>
  <style>
    .but {
      font-family: "Jost", sans-serif;
      font-weight: 500;
      font-size: 25px;
      letter-spacing: 1px;
      display: inline-block;
      padding: 10px 28px 11px 28px;
      border-radius: 50px;
      transition: 0.5s;
      margin-top: 38px;
      margin-bottom: 40px;
      margin-left: 20px;
      color: #fff;
      background: #37517e;
    }

    .but:hover {
      background-color: #209dd8;
      color: var(--first-color);
      box-shadow: 0 10px 36px rgba(0, 0, 0, 0.15);
    }

    .foun {
      margin-left: 368px;
      margin-top: -30px;
    }
  </style>
  <!-- <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon" /> -->
</head>
<main id="main">

  <!-- ======= Clients Section ======= -->
  <!-- <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section>   -->
  <!-- End Cliens Section -->

  <!-- ======= About Us Section ======= -->

  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About Us</h2>
      </div>

      <div class="row content">
        <div class="col-lg-6">
          <p>
            Hello, we are a seasoned team of website and web app developers with over three years of expertise in both front-end and back-end development.
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i>Harworker</li>
            <li><i class="ri-check-double-line"></i> Enthusiastic</li>
            <li><i class="ri-check-double-line"></i> Diligent</li>
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            Specialize in using technologies like <b>HTML, CSS, JavaScript, Bootstrap, MERN stack , PHP, Laravel, Firebase, TailwindCSS, REST APIs, APIs Integrations & Python, Django</b> to create visually stunning and responsive web websites. We are hardworking team and truly passionate about web development because it allows me to blend creativity with problem-solving.
          </p>
          <a href="http://suleman.42web.io/" class="btn-learn-more">Learn More</a>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Why Us Section ======= -->
  <!-- <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section>  -->
  <!-- End Why Us Section

    <!-- ======= Skills Section ======= -->

  <hr>
  <section id="skills" class="skills">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
          <img src="assets/img/skills.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
          <h3>Chart of our Skills</h3>
          <p class="fst-italic">
            This chart illustrates our proficiency levels in specific technologies, showcasing our advanced skills and expertise.
          </p>

          <div class="skills-content">

            <div class="progress">
              <span class="skill">PHP & Wordpress <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Mysql <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">MERN Stack <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Django & Phyton <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">SQL <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Larvel <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </section>
  <!-- End Skills Section -->

  <!-- ======= Services Section ======= -->
  <!-- <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspici</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section> -->
  <!-- End Services Section -->

  <!-- ======= Cta Section ======= -->
  <!-- <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section> -->
  <!-- End Cta Section -->

  <!-- ======= Portfolio Section ======= -->
  <hr>
  <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>These projects demonstrate our capabilities and the diverse range of technologies we work with.
          </p>
        </div>
        
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php
           include "dashboard/auth/conn.php";
          $sql = "SELECT * FROM portfolio";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<div class="col-lg-4 col-md-6 portfolio-item filter-app">';
    echo '<div class="portfolio-img"><img src="' . $row["image"] . '" class="img-fluid" alt=""></div>';
    echo '<div class="portfolio-info">';
    echo '<h4>' . $row["naam"] . '</h4>';
    echo '<p>' . $row["description"] . '</p>';
    echo '<a href="' . $row["image"] . '" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="' . $row["naam"] . '"><i class="bx bx-plus"></i></a>';
    echo '<a href="' . $row["link"] . '" class="details-link" title="More Details"><i class="bx bx-link"></i></a>';
    echo '</div>';
    echo '</div>';
  }
} else {
  echo "0 results";
}
$conn->close();
?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Team</h2>
        <p>We are a team driven by passion and dedication, always striving to deliver excellence in our work. </p>
      </div>

      <div class="row">

        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="assets/img/image.jpeg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Suleman Patras Khan</h4>
              <h4 class="foun">CO Founder</h4>
              <span>Full-Stack Developer</span>
              <p>Quick learner and an aspiring full-stack web developer with core knowledge of MERN stack technology, PHP(Laravel) & Python(Django) Looking forward to applying and enhancing my skills and knowledge as a developer.</p>
              <div class="social">
                <a href="https://github.com/sulemanpatras"><i class="ri-github-fill"></i></a>
                <a href="https://www.linkedin.com/in/suleman-patras-3ab34429b/"> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="assets/img/image2.png" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Cournes Bhatti</h4>
              <h4 class="foun">Founder</h4>
              <span>Full-Stack Developer</span>
              <p>Quick learner and an aspiring full-stack web developer with core knowledge of PHP, Laravel, Wordpress, Javascript Looking forward to applying and enhancing my skills and knowledge as a developer.</p>
              <div class="social">
                <a href="https://github.com/Corunes125"><i class="ri-github-fill"></i></a>
                <a href="https://www.linkedin.com/in/corunes-bhatti-0a817b275/"> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div> -->

      </div>

    </div>
  </section><!-- End Team Section -->

  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">
     
      <div class="section-title">
          <h2>Services</h2>
          <br>
          <h2>PHP & Wordpress Services</h2>
          <p>Our services for websites and web apps is tailored to be both reasonable and affordable, ensuring exceptional value for our clients.</p>
        </div>

        <div class="row">

          <!-- <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box"> -->
            <?php
             include "dashboard/auth/conn.php";
          $sql = "SELECT * FROM services";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">';
        echo '<div class="box">';
        echo '<h2>' . $row["category"] . '</h2>';
        echo '<br>';
        echo '<h3>' . $row["naam"] . '</h3>';
        echo '<ul>';

        // Assuming features are stored as a comma-separated string in the "features" column
        $features = explode(',', $row["description"]);
        foreach ($features as $feature) {
            echo '<li><i class="bx bx-check"></i> ' . trim($feature) . '</li>'; // trim removes extra spaces
        }

        echo '</ul>';
        $link = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'forms/phpform1.php' : 'forms/login.php';
    echo '<a href="' . $link . '" class="buy-btn">Get Started</a>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No services found";
}
$conn->close();
?>


        </div>

      </div>
    </section>
    <!-- End Pricing Section -->
    <!--Second section of prices-->
    <section id="pricing2" class="pricing">
    <br><br><br>
      <div class="container" data-aos="fade-up" id="pricing">

        <div class="section-title">
          <h2>MERN stack Services</h2>
        </div>

        <div class="row">

        <?php
             include "dashboard/auth/conn.php";
          $sql = "SELECT * FROM services2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">';
        echo '<div class="box">';
        echo '<h2>' . $row["category"] . '</h2>';
        echo '<br>';
        echo '<h3>' . $row["naam"] . '</h3>';
        echo '<ul>';

        // Assuming features are stored as a comma-separated string in the "features" column
        $features = explode(',', $row["description"]);
        foreach ($features as $feature) {
            echo '<li><i class="bx bx-check"></i> ' . trim($feature) . '</li>'; // trim removes extra spaces
        }

        echo '</ul>';
        $link = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'forms/phpform2.php' : 'forms/login.php';
    echo '<a href="' . $link . '" class="buy-btn">Get Started</a>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No services found";
}
$conn->close();
?>

        </div>

      </div>
    </section><!-- End Pricing Section -->

  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Pricing</h2>
            <p>Pricing of the Services we Provide</p>
        </div>

        <div class="faq-list">
            <ul>
                <li data-aos="fade-up" data-aos-delay="600">
                    <i class="bx bx-help-circle icon-help"></i>
                    <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq-list-prices">
                       Click Here to display all the Prices
                        <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div id="faq-list-prices" class="collapse" data-bs-parent=".faq-list">
                    <?php
                  include "dashboard/auth/conn.php";

                  $sql_services_prices = "SELECT prices.price AS price, services.delivery_time FROM services INNER JOIN prices ON services.id = prices.id";
                  $result_services_prices = $conn->query($sql_services_prices);

                  $sql_services_prices2 = "SELECT prices2.price AS price, services2.delivery_time FROM services2 INNER JOIN prices2 ON services2.id = prices2.id";
                  $result_services_prices2 = $conn->query($sql_services_prices2);

                  if ($result_services_prices->num_rows > 0) {
                    echo "<br>";
                      echo "<h3>PHP & Wordpress Prcing Table:</h3>";        
                      echo "<ul>";
                      while ($row = $result_services_prices->fetch_assoc()) {
                        echo "<li>" . $counter . ". " . $row['delivery_time'] . ": <strong>" . $row['price'] . "</strong></li>";

                      }
                      echo "</ul>";
                  } else {
                      echo "No services found in Prices table.";
                  }

                  if ($result_services_prices2->num_rows > 0) {
                    echo "<br>";
                      echo "<h3>MERN Stack Prcing Table:</h3>";
                      echo "<ul>";
                      while ($row = $result_services_prices2->fetch_assoc()) {
                        echo "<li>" . $counter . ". " . $row['delivery_time'] . ": <strong>" . $row['price'] . "</strong></li>";

                      }
                      echo "</ul>";
                  } else {
                      echo "No services found in Prices2 table.";
                  }

              
                  $conn->close();
                  ?>

                    </div>
                </li>
            </ul>
        </div>

    </div>
</section>

  <!-- End Frequently Asked Questions Section -->

  <!-- ======= Contact Section ======= -->
  <hr>
  <a href="forms/contact.php" class="but">Click here to Contact us </a>
  <hr>

</main><!-- End #main -->


<?php
include "master/footer.php";
?>