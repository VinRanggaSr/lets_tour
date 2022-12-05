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

  <!-- ====  REMIXICON CDN ==== -->
  <link
  href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
  rel="stylesheet"
/>

<!-- ===== Iconscout CSS ===== -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

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
        $array_users = mysqli_query($mysqli, "SELECT * FROM users");
    ?>
    <div class="login_register">
        <div class="banner">
            <img src="assets/images/bannerLogin1.jpg" alt="">
        </div>
        <div class="center">
          <h1>SignUp</h1>
          <form action="register.php" method="post">
            <div class="txt_field">
              <input type="text" name="username" required>
              <span></span>
              <label>Input username</label>
            </div>
            <div class="txt_field">
              <input type="email" name="email" required>
              <span></span>
              <label>Enter email</label>
            </div>
            <div class="txt_field">
              <input type="password" name="password" required>
              <span></span>
              <label>Enter Password</label>
            </div>
            <input type="submit" class="btn_login" name="Submit" value="SignUp Now">
            <div class="signup_link">
              Have account? <a href="index.php">Login</a>
            </div>
          </form>
        </div>
    </div>


  <!-- ===js -->
  <script src="./assets/js/script.js"></script>

  <!-- === iconlink -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- PHP -->
  <?php
    if(isset($_POST['Submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $check = mysqli_query($mysqli, "SELECT * FROM users WHERE email='$email'");
        
        if ($action = mysqli_num_rows($check) == 0){
            $insert = mysqli_query($mysqli, "INSERT INTO users(`name`, `email`, `password`) VALUES('$username', '$email', '$password')");
            if($insert == true){?>
                <script>alert("Register Success! Login Now")</script> 
                <?php   
                // header("Location:index.php");
            }else{?>
                <script>alert("Your email already exist")</script>
            <?php }
        } ?>
        <script>alert("Your email already exist")</script>
    <?php    
    }
    ?>

</body>

</html>