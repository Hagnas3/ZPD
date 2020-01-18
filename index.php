<?php
  include 'dbh.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
=======
  <meta charset="utf-8">
>>>>>>> 124c8eb35dfa9dc256993602fb2639619bff7a80
  <script src="https://kit.fontawesome.com/0c5de2e8ba.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
<<<<<<< HEAD
  <link rel="stylesheet" type="text/css" href="product.css">
=======
  <link rel="stylesheet" type="text/css" href="slider.css">
>>>>>>> 124c8eb35dfa9dc256993602fb2639619bff7a80
  <title>ZPD</title>
</head>
  <body>
    <section class="navbar">
      <div class="max">
        <ul class="items">
          <li class="title"><h1>PAGE TITLE</h1></li>
          <li class="btn1"><a href="#">HOME</a></li>
<<<<<<< HEAD
          <li class="btn2"><a>ABOUT</a></li>
=======
          <li class="btn2"><a>ABOUT US</a></li>
>>>>>>> 124c8eb35dfa9dc256993602fb2639619bff7a80
          <li class="search">
            <form class="search-insides" action="search.php" method="post">
              <input type="text" name="search" placeholder="">
              <i class="fas fa-search"><h4>Search</h4></i>
              <button class="search-btn" type="submit" name="submit-search">Enter</button>
            </form>
          </li>
        </ul>
      </div>
    </section>
<<<<<<< HEAD

    <div class="max">
    <div class="product-container">
      <?php
        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if ($queryResults > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "

              <div class='product'>
                <div class='image'>
                  <img src=".$row['img_dir'].">
                  <h3>".$row['Title']."</h3>
                  <a href='#'>Details</a>
                  </div>
                <!--<p>".$row['Description']."</p>-->

            </div>";
          }
        }
=======
    <!-- <section class="banner">

    </section> -->
    <div class="product-container">
      <?php
        // $sql = "SELECT * FROM products";
        // $result = mysqli_query($conn, $sql);
        // $queryResults = mysqli_num_rows($result);
        //
        // if ($queryResults > 0) {
        //   while ($row = mysqli_fetch_assoc($result)) {
        //     echo "<div>
        //         <img width='500' src=".$row['img_dir'].">
        //         <h3>".$row['Title']."</h3>
        //         <p>".$row['Description']."</p>
        //     </div>";
        //   }
        // }
>>>>>>> 124c8eb35dfa9dc256993602fb2639619bff7a80
      ?>
    </div>
  </div>
  </body>
</html>
