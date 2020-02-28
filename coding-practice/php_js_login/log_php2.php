<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $password = $_GET["pw"];
      if($password == "1111"){
        echo "환영합니다";
      } else {
        echo "누구십니까?";
      }
     ?>
  </body>
</html>
