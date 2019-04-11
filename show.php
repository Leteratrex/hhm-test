<?php
  require_once 'mysql_connect.php';

  $sql = 'SELECT * FROM `comments` ORDER BY `id` DESC';
  $query = $pdo->query($sql);
  while($row = $query->fetch(PDO::FETCH_OBJ)) {

        $count = 0;
        if(($counts%2)==0){
          echo "<div class='col-xl-4 col-lg-6 col-md-6'>
                  <div class='comment-container__blue'>
                    <div class='comment-container__header__blue'>
                      $row->name
                    </div>
                    <!-- /.comment-container__header -->
                    <div class='comment-container__mail'>
                      $row->email
                    </div>
                    <!-- /.comment-container__mail -->
                    <div class='comment-container__text'>
                      $row->comment
                    </div>
                    <!-- /.comment-container__text -->
                  </div>
                  <!-- /.comment-container -->
                </div>
                <!-- /.col-4 -->";
        }
        else {
          echo "<div class='col-xl-4 col-lg-6 col-md-6'>
                  <div class='comment-container__green'>
                    <div class='comment-container__header__green'>
                      $row->name
                    </div>
                    <!-- /.comment-container__header -->
                    <div class='comment-container__mail'>
                      $row->email
                    </div>
                    <!-- /.comment-container__mail -->
                    <div class='comment-container__text'>
                      $row->comment
                    </div>
                    <!-- /.comment-container__text -->
                  </div>
                  <!-- /.comment-container -->
                </div>
                <!-- /.col-4 -->";
        }
        $counts++;
    }
?>
