<?php
  if (isset($_GET['lang'])) {
    switch ($_GET['lang']) {
      case 'en':
        ?>
        <li class="nav-item">
          <a class="nav-link js-scroll active" href="index.php?lang=en">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll" href="#service">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll" href="#work">Work</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll" href="#blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll" href="#contact">Contact</a>
        </li>
        <?php
        break;

        case 'ru':
          ?>
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="index.php?lang=ru">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">около</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Сервисы</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Работа</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#blog">блог</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">контакт</a>
          </li>
          <?php
          break;

      default:
        ?>
        <li class="nav-item">
          <a class="nav-link js-scroll active" href="index.php?lang=tr">Ana Sayfa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll" href="#about">Ben</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll" href="#service">Hizmet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll" href="#work">Proje</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll" href="#blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll" href="#contact">İletişim</a>
        </li>
        <?php
        break;
    }
  } else {
    ?>
    <li class="nav-item">
      <a class="nav-link js-scroll active" href="index.php">Ana Sayfa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link js-scroll" href="#about">Ben</a>
    </li>
    <li class="nav-item">
      <a class="nav-link js-scroll" href="#service">Hizmet</a>
    </li>
    <li class="nav-item">
      <a class="nav-link js-scroll" href="#work">Proje</a>
    </li>
    <li class="nav-item">
      <a class="nav-link js-scroll" href="#blog">Blog</a>
    </li>
    <li class="nav-item">
      <a class="nav-link js-scroll" href="#contact">İletişim</a>
    </li>
    <?php
  }

?>
