<?php
ob_start();
session_start();

  require_once 'includes/config.php';
  $config_site = $db->query("SELECT * FROM config_site")->fetch(PDO::FETCH_ASSOC);

  if ($config_site['site_status'] == 1) {
    // $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
    $lang = 'tr';
    if ($lang == 'tr' OR $lang == 'en' OR $lang == 'ru' OR $lang == 'ja' OR $lang == 'de' OR $lang == 'ar') {
      $lang_site = $db->query("SELECT * FROM lang_site WHERE lang = '{$lang}'")->fetch(PDO::FETCH_ASSOC);
    } else {
      $lang_site = $db->query("SELECT * FROM lang_site WHERE lang = 'tr'")->fetch(PDO::FETCH_ASSOC);
    }



    require_once 'includes/header.php';

    if (isset($_GET['page'])) {
      if (file_exists('pages/'.$_GET['page'].'.php')) {
        include 'pages/'.$_GET['page'].'.php';
      } else {
        include 'pages/error/404.php';
      }
    } else {
      include 'pages/home.php';
    }

    require_once 'includes/footer.php';
  } else {
    include 'pages\errors\maintenance.php';
  }

ob_end_flush();
 ?>
