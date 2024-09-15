<?php
include_once(__DIR__ . '/partials/head.php');
require_once(__DIR__ . "/data.php");
?>

<h1>Le meilleur pour vos petits compagnons</h1>


<h2>Jouets</h2>
<section>
    <?php
    if ($jouets) {
        foreach ($jouets as $jouet) {
            $namej = $jouet['nom'];
        }

        foreach ($jouets as $jouet) {
    ?>

            <div class="card" style="width: 18rem;">
                <img src="/public/img/<?= $jouet["image"] ?>" class="card-img-top" alt="image d'une jouet <?= $jouet["nom"] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $jouet['nom'] ?></h5>
                    <p>Prix : <?= $jouet['prix'] ?>€</p>
                    <a href="/jouets.php?id=<?= $jouet['id'] ?>" class="btn btn-primary">Voir plus</a>
                </div>
            </div>

    <?php
        }
    } else {
        echo "<h1>Il n'y a pas de jouet !</h1>";
    }
    ?>
</section>

<h2>Accessoires</h2>
<section>
    <?php
    if ($accessoires) {
        foreach ($accessoires as $accessoire) {
            $namea = $accessoire['nom'];
        }

        foreach ($accessoires as $accessoire) {
    ?>
            <div class="card" style="width: 18rem;">
                <img src="/public/img/<?= $accessoire["image"] ?>" class="card-img-top" alt="image d'une jouet <?= $accessoire["nom"] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $accessoire['nom'] ?></h5>
                    <a href="/jouets.php?id=<?= $accessoire['id'] ?>" class="btn btn-primary">Voir plus</a>
                </div>
            </div>
    <?php
        }
    } else {
        echo "<h1>Il n'y a pas d'accessoires !</h1>";
    }
    ?>
</section>

<h2>Nourritures</h2>
<section>
    <?php
    if ($nourritures) {
        foreach ($nourritures as $nourriture) {
            $namen = $nourriture['nom'];
        }

        foreach ($nourritures as $nourriture) {
    ?>
            <div class="card" style="width: 18rem;">
                <img src="/public/img/<?= $nourriture["image"] ?>" class="card-img-top" alt="image d'une jouet <?= $nourriture["nom"] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $nourriture['nom'] ?></h5>
                    <a href="/jouets.php?id=<?= $nourriture['id'] ?>" class="btn btn-primary">Voir plus</a>
                </div>
            </div>
    <?php
        }
    } else {
        echo "<h1>Il n'y a pas de nourriture !</h1>";
    }
    ?>
</section>
<?php
include_once(__DIR__ . "/partials/footer.php")
?>