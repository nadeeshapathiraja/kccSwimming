<?php include('server.php');

    if(empty($_SESSION['username'])){
      header('location: login.php');
    }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>SWIMMING CLUB | C.W.W KANNANGARA CENTRAL COLLEGE | MATHUGAMA</title>
    <link rel="stylesheet" type="text/css" href="homeStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  </head>

  <body>

    <div class="content">
      <?php if(isset($_SESSION['success'])): ?>
          <div class="error success">
              <h3>
                <?php
                  echo $_SESSION['success'];
                  unset($_SESSION['success']);
                ?>
              </h3>
          </div>
      <?php endif ?>

        <header>
          <nav>
            <h1>MATHUGAMA AQUATIC CLUB</h1>
            <ul id="nav">
              <li><a class="homered" href="#">HOME</a></li>

              <li><a class="homeblack" href="userSelection.php">REGISRATION</a></li>

              <li><a class="homeblack" href="#">NEWS</a></li>

              <li><a class="homeblack" href="#">STAF</a></li>

              <li><a class="homeblack" href="#">CONTACT</a></li>

              <li><a class="homeblack" href="#">PAYMENT</a></li>

              <li><a class="homeblack" href="#">ABOUT</a></li>

              <li><a class="homeout" href="login.php">LOGOUT</a></li>

              <li> <a href="#"><i class="fab fa-facebook"></i> Facebook</a> </li>

            </ul>
          </nav>
        </header>

        <div class="divider">

        </div>

    </div>
    <div class="line1">SWIMMING  CLUB</div>
    <div class="line2">C.W.W KANNANGARA CENTRAL COLLEGE</div>
    <div class="line3">MATHUGAMA</div>
    <div class="line4">DAMMIKA MUNASINHA</div>


  </body>

</html>
