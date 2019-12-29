<?php
  include 'dbh.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Seaarch page</title>
  </head>
  <body>
    <h1>Search page</h1>

    <div class="product-container">
      <?php
        if (isset($_POST['submit-search'])) {
          $search = mysqli_real_escape_string($conn, $_POST['search']);
          $sql = "SELECT * FROM product_info WHERE p_title LIKE '%$search%' OR p_description LIKE '%$search%'";
          $result = mysqli_query($conn, $sql);
          $queryResult = mysqli_num_rows($result);

          if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<div>
                  <h3>".$row['Title']."</h3>
                  <p>".$row['Description']."</p>
              </div>";
            }
          } else {
            echo "There are no results matching your search!";
          }
        }
      ?>
    </div>
  </body>
</html>
