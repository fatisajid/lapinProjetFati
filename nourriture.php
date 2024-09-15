<?php
include_once(__DIR__ . '/partials/head.php');
require_once(__DIR__ . "/data.php");
require_once(__DIR__ . "/function.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $nourriture = findNourritureById($nourritures, $id);

    if ($nourriture !== null) {
?>
        <div class="containerj">
            <h1><?= htmlspecialchars($nourriture['nom'], ENT_QUOTES, 'UTF-8') ?></h1>
            <p class="price">Prix : <?= htmlspecialchars($nourriture['prix'], ENT_QUOTES, 'UTF-8') ?>€</p>
            <p>Description : <?= htmlspecialchars($nourriture['description'], ENT_QUOTES, 'UTF-8') ?></p>

            <?php if (file_exists(__DIR__ . '/public/img/' . $nourriture["image"])): ?>
                <img src="/public/img/<?= htmlspecialchars($nourriture["image"], ENT_QUOTES, 'UTF-8') ?>"
                    class="cardj-img-top"
                    alt="image d'alimentation <?= htmlspecialchars($nourriture['nom'], ENT_QUOTES, 'UTF-8') ?>">
            <?php endif; ?>

            <div class="cardj-body">

            </div>
        </div>
<?php

    } else {
        echo "<p>pas de d'alimentation</p>";
    }
} else {
    header('OUPS: /404.php');
    exit;
}
?>

<?php
include_once(__DIR__ . "/partials/footer.php")
?>