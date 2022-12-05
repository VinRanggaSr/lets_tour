<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Let's Tour - Travel agancy</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

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
  <header class="header" data-header style="background-color: hsl(208, 97%, 12%);">
    <div class="overlay" data-overlay></div>
    <div class="header-bottom">
      <div class="container">

        <a href="#" class="logo">
          <img src="./assets/images/project-logoWhite.png" alt="Tourly logo">
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
              <a href="home.php" class="navbar-link" data-nav-link>home</a>
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

  <div class = "card-wrapper">
    <div class = "card">
      <!-- card left -->
      <div class = "product-imgs">
        <div class = "img-display">
          <div class = "img-showcase">
            <img src = "assets/images/nusaPenida2.jpg" alt = "">
          </div>
        </div>
        
      </div>
      <!-- card right -->
      <div class = "product-content">
        <h2 class = "product-title">Nusa Penida, Bali</h2>
        <a href = "#" class = "product-link">Indoensia</a>
        <div class = "product-rating">
          <i><img src="https://api.iconify.design/emojione/star.svg?width=24" alt="" style="width: 24px;"></i>
          <i><img src="https://api.iconify.design/emojione/star.svg?width=24" alt="" style="width: 24px;"></i>
          <i><img src="https://api.iconify.design/emojione/star.svg?width=24" alt="" style="width: 24px;"></i>
          <i><img src="https://api.iconify.design/emojione/star.svg?width=24" alt="" style="width: 24px;"></i>
          <i><img src="https://api.iconify.design/codicon/star-full.svg?color=%23c4c4c4&width=24" alt="" style="width: 24px;"></i>
          <span>4.7(64)</span>
        </div>

        <div class = "product-price">
          <p class = "last-price">Old Price: <span>$900.00</span></p>
          <p class = "new-price">New Price: <span>$750.00 (17%)</span></p>
        </div>

        <div class = "product-detail">
          <h2>about this item: </h2>
          <p>Nusa Penida is an island (nusa) part of the Republic of Indonesia which is located southeast of Bali which is separated by the Badung Strait. Near this island there are also other small islands, namely Nusa Ceningan and Nusa Lembongan. The waters of the island of Nusa Penida are famous for their diving areas, including Crystal Bay, Manta Point, Batu Meling, Batu Lumbung, Batu Abah, Toyapakeh and Malibu Point.</p>
          <p>Meanwhile, in Nusa Penida District, there is absolutely no river. The sources of water in Nusa Penida Sub-district are springs and rainwater which are accommodated in cubang by local residents. Klungkung Regency has a tropical climate. Wet months and dry months between Nusa Penida District and mainland Klungkung District are very different.</p>
          <ul>
            <li><img src="assets/images/checked.png" alt="" style="width: 20px;"> Time: <span> 7 Day / 6 Night</span></li>
            <li><img src="assets/images/checked.png" alt="" style="width: 20px;"> Capacity: <span>10 People</span></li>
            <li><img src="assets/images/checked.png" alt="" style="width: 20px;"> Hotel: <span>Nusa Penida Beach Hotel</span></li>
            <li><img src="assets/images/checked.png" alt="" style="width: 20px;"> Transport: <span>Garuda Indoensia</span></li>
            <li><img src="assets/images/checked.png" alt="" style="width: 20px;"> Tour Guide: <span>Free</span></li>
          </ul>
        </div>

        <div class = "purchase-info">
          <button type = "btn btn-primary" class = "btn">Booking Now</button>
        </div>
      </div>
    </div>
  </div>


  <!-- ===== FOOTER ====== -->
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