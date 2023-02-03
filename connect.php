<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "testserver";

?>
<html>
    <body>
          <?php
                $query = "SELECT * FROM `logintab`;";
                $result = mysqli_query($db, $query);
                while($row = mysqli_fetch_assoc($result)) {
                      // Display your datas on the page
                }
          ?>
    </body>
</html>