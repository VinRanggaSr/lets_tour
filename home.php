<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Let's Tour - Travel agancy</title>

  <!-- Favicon -->
  <!-- <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml"> -->

  <!-- css -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">
    <?php
        include_once("connection.php");
        $array_users = mysqli_query($mysqli, "SELECT * FROM pesan");
    ?>
  <header class="header" data-header>
    <div class="overlay" data-overlay></div>
    <div class="header-bottom">
      <div class="container">
        <a href="#" class="logo">
          <img src="./assets/images/project-logo.png" alt="Tourly logo">
        </a>
        <nav class="navbar" data-navbar>
          <div class="navbar-top">
            <a href="#" class="logo">
              <img src="./assets/images/logo-blue.svg" alt="Tourly logo">
            </a>
            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>
          </div>
          <ul class="navbar-list">
            <li>
              <a href="#home" class="navbar-link" data-nav-link>home</a>
            </li>
            <li>
              <a href="#package" class="navbar-link" data-nav-link>packages</a>
            </li>
            <li>
              <a href="#gallery" class="navbar-link" data-nav-link>gallery</a>
            </li>
          </ul>
        </nav>
        <button class="btn btn-primary"><a href="#bottom" style="color: white;">Contact</a></button>
      </div>
    </div>

  </header>

  <main>
    <!-- === HERO === -->
    <article>

      <section class="hero" id="home">
        <div class="container">
          <h2 class="h1 hero-title">Rilex On Your Live Now</h2>
          <p class="hero-text">
            You can travel anywhere very easily, when using our services. because we will help with all forms of need, both in the form of transportation tickets and lodging
          </p>
          <div class="btn-group">
            <button class="btn btn-primary"><a href="#more" style="color: white;">Learn More</a></button>
          </div>

        </div>
      </section>
      <!-- === TOUR SEARCH === -->

      <section class="tour-search" id="more">
        <div class="container">

          <form action="" class="tour-search-form">

            <div class="input-wrapper">
              <label for="destination" class="input-label">Search Destination*</label>

              <input type="text" name="destination" id="destination" placeholder="Enter Destination"
                class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="destination" class="input-label">price*</label>

              <input type="number" name="price" id="price" placeholder="Your budget"
                class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="checkin" class="input-label">Checkin Date*</label>

              <input type="date" name="checkin" id="checkin" class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="checkout" class="input-label">Checkout Date*</label>

              <input type="date" name="checkout" id="checkout" class="input-field">
            </div>

            <button type="submit" class="btn btn-secondary">Search now</button>

          </form>

        </div>
      </section>
      
      <section class="package" id="package">
        <div class="container">

          <p class="section-subtitle">Package Available</p>

          <h2 class="h2 section-title">Choose Your Package</h2>

          <p class="section-text">
            all available packages, can help all your main needs during the holidays at your destination
          </p>

          <!-- List Package -->
          <ul class="package-list">
            <li>
              <div class="package-card">
                <figure class="card-banner">
                  <img src="./assets/images/nusaPenida1.jpg" alt="Nusa Penida" loading="lazy">
                </figure>
                <div class="card-content">
                  <h3 class="h3 card-title">Nusa Penida, Bali</h3>
                  <p class="card-text">
                    Nusa Penida is famous for having white sand beaches. Especially if you stop at Kelingking Beach. There is an amazingly beautiful view hidden behind the steep and sturdy cliffs of Nusa Penida. You can find white sandy beaches with natural shades
                  </p>
                  <ul class="card-meta-list">
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>
                        <p class="text">7D/6N</p>
                      </div>
                    </li>
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>
                        <p class="text">pax: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>
                        <p class="text">Indonesia</p>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="card-price">
                  <div class="wrapper">
                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>
                    <p class="reviews">(64 reviews)</p>
                  </div>
                  <p class="price">
                    $750
                    <span>/ per person</span>
                  </p>
                  <button class="btn btn-secondary"><a href="detail.php">Book Now</a></button>
                </div>
              </div>
            </li>
            <li>
              <div class="package-card">
                <figure class="card-banner">
                  <img src="./assets/images/disneyWorld1.jpeg" alt="Disney World" loading="lazy">
                </figure>
                <div class="card-content">
                  <h3 class="h3 card-title">Disney wolrd, Florida</h3>
                  <p class="card-text">
                    Disney is renowned as a film producer and showman, as well as an innovator in animation and theme park design. He and his crew created various world-famous characters, such as Mickey Mouse, who is voiced by Disney himself. He has won 26 Academy Awards from 59 nominations
                  </p>
                  <ul class="card-meta-list">
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>
                        <p class="text">14D/13N</p>
                      </div>
                    </li>
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>
                        <p class="text">pax: 8</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>
                        <p class="text">United State America</p>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="card-price">
                  <div class="wrapper">
                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>
                    <p class="reviews">(32 reviews)</p>
                  </div>
                  <p class="price">
                    $2000
                    <span>/ per person</span>
                  </p>
                  <button class="btn btn-secondary">Book Now</button>
                </div>
              </div>
            </li>

            <li>
              <div class="package-card">
                <figure class="card-banner">
                  <img src="./assets/images/labuanBajo1.jpg" alt="Labuan Bajo" loading="lazy">
                </figure>
                <div class="card-content">
                  <h3 class="h3 card-title">Labuan Bajo, Nusa Tengara Timur</h3>
                  <p class="card-text">
                    For those of you who love the beauty of the sea, Labuan Bajo has an underwater paradise that you must visit. Yep, beautiful coral reefs and marine animals make a special attraction for tourists. You can snorkel or dive at several points in Labuan Bajo.
                  </p>
                  <ul class="card-meta-list">
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>
                        <p class="text">8D/7N</p>
                      </div>
                    </li>
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>
                        <p class="text">pax: 12</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>
                        <p class="text">Indonesia</p>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="card-price">
                  <div class="wrapper">
                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>
                    <p class="reviews">(48 reviews)</p>
                  </div>
                  <p class="price">
                    $1000
                    <span>/ per person</span>
                  </p>
                  <button class="btn btn-secondary">Book Now</button>
                </div>
              </div>
            </li>
          </ul>

        </div>
      </section>

      <!-- ====== GALERY ===== -->
      <section class="gallery" id="gallery">
        <div class="container">

          <p class="section-subtitle">Photo Gallery</p>

          <h2 class="h2 section-title">Photo's From Travellers</h2>

          <p class="section-text">
          you can see the beauty of every destination that you can visit
          </p>

          <ul class="gallery-list">

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="assets/images/labuanBajo2.jpg" alt="Gallery image">
              </figure>
            </li>
            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="assets/images/nusaPenida3.jpg" alt="Gallery image">
              </figure>
            </li>
            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="assets/images/labuanBajo3.jpg" alt="Gallery image">
              </figure>
            </li>
            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/disneyWord2.jpg" alt="Gallery image">
              </figure>
            </li>
            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/nusaPenida4.jpg" alt="Gallery image">
              </figure>
            </li>
            

           
          </ul>

        </div>
      </section>

    </article>
  </main>


  <!-- ===== FOOTER ===== -->
  <footer class="footer" id="bottom">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/project-logoWhite.png" alt="Tourly logo">
          </a>

          <p class="footer-text">
            Let's go vacation to your favorite destination
          </p>

        </div>

        <div class="footer-contact">

          <h4 class="contact-title">Contact Us</h4>

          <p class="contact-text">
            Feel free to contact for your vacation 
          </p>

          <ul>

            <li class="contact-item">
              <ion-icon name="call-outline"></ion-icon>

              <a href="" class="contact-link">+62896-4231-7687</a>
            </li>

            <li class="contact-item">
              <ion-icon name="mail-outline"></ion-icon>

              <a href="mailto:vrangga1@gmail.com" class="contact-link">vrangga1@gmail.com</a>
            </li>

            <li class="contact-item">
              <ion-icon name="link-outline"></ion-icon>

              <a href="https://vinranggasr.github.io/" target="_blank" class="contact-link">vincentiusrangga.my.id</a>
            </li>

          </ul>

        </div>

        <div class="footer-form">

          <p class="form-text">
            Give me suggestions for the development of our service
          </p>

          <form action="home.php" method="post" class="form-wrapper">
            <input type="text" name="pesan" class="input-field" placeholder="Enter Your suggestions" required>

            <button type="submit" name="Submit" class="btn btn-secondary">Send Now</button>
          </form>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2022 <a href="">vincentius.rangga</a> | All rights reserved
        </p>
      </div>
    </div>

  </footer>

  <!-- SEND MESSAGE -->
  <?php
    if(isset($_POST['Submit'])){
        $pesan = $_POST['pesan'];
        
        $insert = mysqli_query($mysqli, "INSERT INTO pesan(`pesan`) VALUES('$pesan')");
            if($insert == true){?>
                <script>alert("Message Successfully Sent")</script> 
                <?php   
                // header("Location:index.php");
            }else{?>
                <script>alert("Unsuccess Sent")</script>
            <?php } ?>
    <?php    
    }
    ?>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- ===js -->
  <script src="./assets/js/script.js"></script>

  <!-- === iconlink -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>