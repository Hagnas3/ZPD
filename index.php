<?php
  include 'dbh.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="tex/css" href="style.css">
    <title></title>
  </head>
  <body>
    <form action="search.php" method="post">
      <input type="text" name="search" placeholder="Search">
      <button type="submit" name="submit-search">Search</button>
    </form>
    <h1>Front page</h1>
    <h2>all products:</h2>

    <div class="product-container">
      <?php
        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if ($queryResults > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<div>
                <h3>".$row['Title']."</h3>
                <p>".$row['Description']."</p>
            </div>";
          }
        }
      ?>
    </div>
  </body>
</html>
