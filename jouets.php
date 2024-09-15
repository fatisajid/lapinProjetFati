<?php
include_once(__DIR__ . '/partials/head.php');
require_once(__DIR__ . "/data.php");
require_once(__DIR__ . "/function.php");

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $jouet = findJouetById($jouets, $id);

    if ($jouet !== null) {
?>
        <div class="containerj">
            <h1><?= htmlspecialchars($jouet['nom'], ENT_QUOTES, 'UTF-8') ?></h1>
            <p class="price">Prix : <?= htmlspecialchars($jouet['prix'], ENT_QUOTES, 'UTF-8') ?>€</p>
            <p>Description : <?= htmlspecialchars($jouet['description'], ENT_QUOTES, 'UTF-8') ?></p>

            <?php if (file_exists(__DIR__ . '/public/img/' . $jouet["image"])): ?>
                <img src="/public/img/<?= htmlspecialchars($jouet["image"], ENT_QUOTES, 'UTF-8') ?>"
                    class="cardj-img-top"
                    alt="image d'un jouet <?= htmlspecialchars($jouet['nom'], ENT_QUOTES, 'UTF-8') ?>">
            <?php endif; ?>

            <div class="cardj-body">

            </div>
        </div>
<?php
    } else {
        echo "<p>Jouet non trouvé</p>";
    }
} else {
    header('Location: /404.php');
    exit;
}

include_once(__DIR__ . "/partials/footer.php");
?>