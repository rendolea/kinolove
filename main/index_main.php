<?php
// Проверяем, существует ли файл
$jsonFile = 'films.json';
if (!file_exists($jsonFile)) {
    die("Ошибка: файл films.json не найден!");
}

// Читаем и декодируем JSON
$jsonData = file_get_contents($jsonFile);
$films = json_decode($jsonData, true);

// Проверяем ошибки JSON
if (json_last_error() !== JSON_ERROR_NONE) {
    die("Ошибка в JSON: " . json_last_error_msg());
}
?>

<html>

    <link href="./style_main.css" rel="stylesheet">
    <link href="../image/short_logo.png" rel="shortcut icon">
    <title>КИНОLOVE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <body>
        <div class="wraper">
            <div class="menu_wrap" id="menu_wrap">
              <img class="menu_btn" id="menu_btn" src="../image/menu_line.png">
              <nav class="menu_list">
                <a href="../main/index_main.html"> — АФИША</a>
                  <a href="../soon/index_soon.html"> — СКОРО В КИНО</a>
                  <a href="../promo/index_promo.html"> — АКЦИИ</a>
                  <a href="../about/index_about.html"> — О НАС</a>
                  <!-- <a href="../regist/index_login.html"><img src="./image/Male User.png"></a> -->
                  
              </nav>
              <div class="logo_wrap">
                <img src="../image/logo.png">
                <span>Покажи свою любовь к кино!</span>
              </div>
            </div>
            <div class="content" id="content">
    <header>
      <div class="logot">
        <img src="../image/logo.png" >
      </div>
      <div class="main_but">
        <nav>
            <a href="../main/index_main.html">АФИША</a>
            <a href="../soon/index_soon.html">СКОРО В КИНО</a>
            <a href="../promo/index_promo.html">АКЦИИ</a>
            <a href="../about/index_about.html">О НАС</a>
            <a href="../regist/auth.html"><img src="./image/Male User.png"></a>
        </nav>
      </div>  
    </header>
    <main>
        <div class="slider" id="slider">
            <img src="../image/hoh.jpg" alt="slide 01">
            <img src="../image/stolet.jpg" alt="slide 02">
            <img src="../image/da.jpeg" alt="slide 03">
        </div>
        <div class="controls">
            <img src="../image/play2.png" id="btnPrev">
            <img src="../image/play.png" id="btnNext">
        </div>
        <div class="chooser">
            <ul class="list">
                <li style="border-right: 5px solid white; padding: 5px 19px;" data-id="today">сегодня</li>
                <li style="border-right: 5px solid white; padding: 5px 19px;" data-id="tommorow">завтра</li>
                <li style="border-right: 5px solid white; padding: 5px 19px;" id="tommorow" data-id="today">8 мая</li>
                <li style="border-right: 5px solid white; padding: 5px 19px;" id="tommorow2" data-id="past">9 мая</li>
                <li style="border-right: 5px solid white; padding: 5px 19px;" id="tommorow3" data-id="tommorow">10 мая</li>
                <li style="padding: 5px 19px; border-right: 5px solid white;" id="tommorow4" data-id="past">11 мая</li>
                <li class="cho" style="padding: 5px 19px;">выбор даты</a>
            </ul>
        </div>
        <h1 style="text-align:center;">Список фильмов</h1>
    <div style="text-align:center;">
     <?php foreach ($films as $film): ?>
         <div class="card">
                <a href="film.php?id=<?= $film['id'] ?>">
                    <?php if (!empty($film['постер'])): ?>
                        <img src="<?= htmlspecialchars($film['постер']) ?>" alt="<?= htmlspecialchars($film['название']) ?>">
                    <?php endif; ?>
                    <h3><?= htmlspecialchars($film['название']) ?></h3>
                    <p><?= htmlspecialchars($film['жанр']) ?></p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    </main>
    <footer>
        <div class="logo_name">
            <img src="../image/logo.png">
            <span>Покажи свою любовь к кино!</span>
        </div>
        <div class="foot_if">
            <div class="menu">
                <span>меню</span>
                <a>афиша</a>
                <a>скоро в кино</a>
                <a>акции</a>
                <a>о нас</a>
            </div>
            <div class="pr_op"><div class="opl">
                <span>способ оплаты</span>
                <div class="opl_ic">
                    <img src="../image/mir.png">
                    <img src="../image/visa.png">
                    <img src="../image/marter.png">
                    <img src="../image/mama.png">
                </div>
            </div>
            <p>© 2024. Все права защищены</p>
            </div>
            <div class="locat">
                <H1>КРАСНОДАР</H1>
                <span>ул. Уральская, 79/1, 
                    <br>(второй этаж ТРК "СБС 
                    <br>Мегамолл")</span>
                <span >+ 7 (928) 431-72-75</span>
            </div>
        </div>
    </footer></div>
    <script src="../main/script_main.js"></script>
</div>
</body>

</html>