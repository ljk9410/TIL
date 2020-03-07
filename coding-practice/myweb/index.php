<?php
  require("C:\Bitnami\wampstack-7.3.13-0\apache2\htdocs\lib\db.php");
  require("C:\Bitnami\wampstack-7.3.13-0\apache2\htdocs\config\config.php");
  $conn = db_init($config['host'],$config['duser'],$config['dpw'],$config['dname']);
  $result = mysqli_query($conn,'SELECT * FROM topic');
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://localhost/bootstrap-3.3.4-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://localhost/myweb/style.css">
</head>
<body id="target">
  <div class="container">
    <header class="jumbotron text-center">
      <img id="logo" class="img-circle" src="https://s3-ap-northeast-2.amazonaws.com/opentutorials-user-file/course/1/5641.png" alt="hi">
      <h1><a href="https://localhost/myweb/index.php">JavaScript</a></h1>
    </header>
    <div class="row">
      <nav class="col-md-3">
        <ol class="nav flex-column">
          <?php
            while($row = mysqli_fetch_assoc($result)){
              echo '<li><a href="http://localhost/myweb/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
            };
           ?>
        </ol>
      </nav>
      <div class="col-md-9">
        <article>
            <?php
              if(empty($_GET['id'])===false){
                $sql = 'SELECT topic.id,title,name,description FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id='.$_GET['id'];
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
                echo '<p>'.htmlspecialchars($row['name']).'</p>';
                echo strip_tags($row['description'],'<a><h1><h2><h3><h4><h5><ol><li>');
             }
           ?>
         </article>
         <hr>
         <div id="control">
           <div class="btn-group">
             <input type="button" value="white" onclick="document.getElementById('target').className='white'"/ class="btn btn-default btn-lg">
             <input type="button" value="black" onclick="document.getElementById('target').className='black'"/ class="btn btn-default btn-lg">
           </div>
           <a href="http://localhost/myweb/write.php" class="btn btn-success btn-lg">쓰기</a>
         </div>
      </div>
     </div>
  </div>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>
