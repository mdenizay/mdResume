
<?php
if ($lang == 'tr' OR $lang == 'en' OR $lang == 'ru' OR $lang == 'ja' OR $lang == 'de' OR $lang == 'ar') {
  $lang_menus = $db->query("SELECT * FROM lang_menu WHERE lang = '{$lang}'");
  if ($lang_menus->rowCount()) {
    foreach($lang_menus as $lang_menu){

      ?>
      <li class="nav-item">
        <a class="nav-link js-scroll" href="<?php echo $lang_menu['href']; ?>"><?php echo $lang_menu['item']; ?></a>
      </li>
      <?php
    }
  }
} else {
  $lang_menus = $db->query("SELECT * FROM lang_menu WHERE lang = 'tr'");
  if ($lang_menus->rowCount()) {
    foreach($lang_menus as $lang_menu){

      ?>
      <li class="nav-item">
        <a class="nav-link js-scroll" href="<?php echo $lang_menu['href']; ?>"><?php echo $lang_menu['item']; ?></a>
      </li>
      <?php
    }
  }
}
