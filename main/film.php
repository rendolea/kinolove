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

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($film['название']) ?></title>
</head>
<body>
    <h1><?= htmlspecialchars($film['название']) ?></h1>

    <?php if (!empty($film['постер']) && file_exists($film['постер'])): ?>
    <img src="<?= htmlspecialchars($film['постер']) ?>" alt="<?= htmlspecialchars($film['название']) ?>" style="max-width:300px;"><br>
<?php endif; ?>


    <p><strong>Режиссёр:</strong> <?= htmlspecialchars($film['режиссёр']) ?></p>
    <p><strong>В ролях:</strong> <?= is_array($film['в_ролях']) ? implode(', ', $film['в_ролях']) : htmlspecialchars($film['в_ролях']) ?></p>
    <p><strong>Хронометраж:</strong> <?= htmlspecialchars($film['хронометраж']) ?></p>
    <p><strong>Страна:</strong> <?= htmlspecialchars($film['страна']) ?></p>
    <p><strong>Год:</strong> <?= htmlspecialchars($film['год']) ?></p>
    <p><strong>Описание:</strong> <?= htmlspecialchars($film['описание']) ?></p>

    <br>
    <a href="index.php">← Назад к списку фильмов</a>
</body>
</html>
