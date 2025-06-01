<?php
$films = json_decode(file_get_contents('films.json'), true);

// Получаем id из URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Проверка: есть ли такой фильм
$film = null;
if ($id > 0 && $id <= count($films)) {
    $film = $films[$id - 1]; // Индексы массива начинаются с 0
}

if (!$film) {
    echo "Фильм не найден.";
    exit;
}
?>



<html>
    <link href="./style_filmcard.css" rel="stylesheet">
    <link href="../image/short_logo.png" rel="shortcut icon">
    <title><?= htmlspecialchars($film['название']) ?></title>
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
        </nav>
        <div class="logo_wrap">
          <img src="../image/logo.png">
          <span>Покажи свою любовь к кино!</span>
        </div>
      </div>
      <div class="content" id="content">
    <header>
      <div class="logot">
        
        <img src="../image/logo.png">
      </div>
      <div class="main_but">
        <nav>
            <a href="../main/index_main.html">АФИША</a>
            <a href="../soon/index_soon.html">СКОРО В КИНО</a>
            <a href="../promo/index_promo.html">АКЦИИ</a>
            <a href="../about/index_about.html">О НАС</a>
        </nav>
      </div>  
    </header>
    <main>
      <div class="head_lihk">
        <span style="color: #FF0000;">расписание залов</span>
        <span style="color: white;">|</span>
        <span style="color: white;"><?= htmlspecialchars($film['название']) ?></span>
      </div>
      <div class="main_inf">
        <div class="bunner">
          <img src="<?= htmlspecialchars($film['постер']) ?>" alt="<?= htmlspecialchars($film['название']) ?>">
        </div>
        <div class="film_inf">
          <div class="name">
            <span><?= htmlspecialchars($film['жанр']) ?></span>
            <h3><?= htmlspecialchars($film['название']) ?></h3>
          </div>
          <table>
            <tr>
              <td>РЕЖИСЕР</td>
              <td style="font-weight: 400; padding-left: 90px;"><?= htmlspecialchars($film['режиссёр']) ?></td>
            </tr>
            <tr>
              <td>В РОЛЯХ</td>
              <td style="font-weight: 400; padding-left: 90px;"><?= is_array($film['в_ролях']) ? implode(', ', $film['в_ролях']) : htmlspecialchars($film['в_ролях']) ?></td>
            </tr>
            <tr>
              <td>ХРОНОМЕТРАЖ</td>
              <td style="font-weight: 400; padding-left: 90px;"><?= htmlspecialchars($film['хронометраж']) ?></td>
            </tr>
            <tr>
              <td>СТРАНА</td>
              <td style="font-weight: 400; padding-left: 90px;"><?= htmlspecialchars($film['страна']) ?></td>
            </tr>
            <tr>
              <td>ГОД</td>
              <td style="font-weight: 400; padding-left: 90px;"><?= htmlspecialchars($film['год']) ?></td>
            </tr>
          </table>
          <span class="film_inform_text"><?= htmlspecialchars($film['описание']) ?></span>
        </div>
        <div class="treiler">
          <iframe width="450PX" height="250PX" src="https://www.youtube.com/embed/-0iEKdxvafo" title="Сто лет тому вперед | Трейлер | В кино с 18 апреля" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="data_film">
          <div class="chooser">
            <nav>
                <a style="border-right: 5px solid white; padding: 5px 19px;">сегодня</a>
                <a style="border-right: 5px solid white; padding: 5px 19px;">завтра</a>
                <a style="border-right: 5px solid white; padding: 5px 19px;">среда, 8 мая</a>
                <a style="border-right: 5px solid white; padding: 5px 19px;">четверг, 9 мая</a>
                <a class="cho" style="padding: 5px 19px;">выбор даты</a>
            </nav>
        </div>
        <h1>КИНОТЕАТР КИНОLOVE</h1>
        <span>ул. Уральская, 79/1, (второй этаж ТРК "СБС Мегамолл")</span>
        <div class="raspisanie">
          <div class="data_seans">
            <div class="time"><a href="">10:10</a></div>
            <DIV class="film_ver"><span>2D</span></DIV>
          </div>
          <div class="data_seans">
            <div class="time"><a href="">12:40</a></div>
            <DIV class="film_ver"><span>2D</span></DIV>
          </div>
          <div class="data_seans">
            <div class="time"><a href="">15:30</a></div>
            <DIV class="film_ver"><span>2D</span></DIV>
          </div>
          <div class="data_seans">
            <div class="time"><a href="">18:00</a></div>
            <DIV class="film_ver"><span>2D</span></DIV>
          </div>
          <div class="data_seans">
            <div class="time"><a href="">21:10</a></div>
            <DIV class="film_ver"><span>2D</span></DIV>
          </div>
          <div class="data_seans">
            <div class="time"><a href="">22:20</a></div>
            <DIV class="film_ver"><span>2D</span></DIV>
          </div>
          
        </div>
        
      </div>
      <div class="booking hidden"><div class="boo">
        <div class="zagol"><h1>сто лет тому вперед</h1>
        <div><span>0</span><span>КИНОТЕАТР КИНОLOVE</span></div>
        <span class="date">время 00:00</span>
        </div>
        
        <div class="mest">
            <div class="ecran"><img src="./mon.png">
            <span>ЭКРАН</span></div>
            <table class="tat">
                <tr>
                    <td >А</td>
                    <td ></td>
                    <td ></td>
                    <td class="mesto free"></td>
                    <td class="mesto free"></td>
                    <td class="mesto free"></td>
                    <td class="mesto free"></td>
                    <td class="mesto free"></td>
                    <td ></td>
                    <td ></td>
                </tr>
                <tr>
                    <td>B</td>
                    <td></td>
                    <td class="mesto free"></td>
                    <td class="mesto free"></td>
                    <td class="mesto free"></td>
                    <td class="mesto free"></td>
                    <td class="mesto free"></td>
                    <td class="mesto free"></td>
                    <td class="mesto free"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>C</td>
                    <td class="mesto free"></td>
                    <td class="mesto free"></td>
                    <td class="mesto free"></td>
                    <td class="mesto free"></td>
                    <td class="mesto free"></td>
                    <td class="mesto free"></td>
                    <td class="mesto free"></td>
                    <td class="mesto free"></td>
                    <td class="mesto free"></td>
                </tr>
                <tr>
                    <td>D</td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                </tr>
                <tr>
                    <td>E</td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                </tr>
                <tr>
                    <td>F</td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                    <td class="booked"></td>
                </tr>
                
            </table>
            <div class="name_mest ">
                <div style="background-color: #323232;"></div>
                <span style="    margin-right: 42px;">свободно</span>
                <div style="background-color: #CECECE;"></div>
                <span style="    margin-right: 42px;">занято</span>
                <div style="background-color: #FE0000;"></div>
                <span>выбрано</span>
            </div>
        </div>
       <div class="bil_inf"> <div class="pok_bil hidden">
            <div class="billet">
                <span>Время Ряд</span>
                <div></div>
                <span>200 P</span>
            </div>
            <div class="opl hidden">
                <button><a href="">БРОНИРОВАТЬ</a></button>
            </div>
        </div></div>
    </div></div>
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
  <script src="./script_filmcard.js"></script>
</div>
</html>