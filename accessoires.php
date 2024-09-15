<?php
include_once(__DIR__ . '/partials/head.php');
require_once(__DIR__ . "/data.php");
require_once(__DIR__ . "/function.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $jouet = findAccessoireById($accessoires, $id);

    if ($accessoire !== null) {
?>
        <h1><?= $accessoire['nom'] ?></h1>
        <p>Prix : <?= $accessoire['prix'] ?>€</p>
        
        <img src="/public/img/<?= $accessoire["image"] ?>" class="card-img-top" alt="image d'une jouet <?= $accessoire["nom"] ?>">
            <div class="card-body">
<?php

    } else {
        echo "<p>Jouet non trouvée</p>";
    }
} else {
    header('OUPS: /404.php');
    exit;
}
?>

<?php
include_once(__DIR__ . "/partials/footer.php")
?>