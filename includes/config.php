<?php
  try {
    $db = new PDO("mysql:host=localhost;dbname=mdenizay;charset=utf8", "root", "");
  } catch( PDOException $e ){
    print $e->getMessage();
  }
 ?>
