<?php
include 'partials/head.php';
?>

<?php
if (empty($_POST['mail']) || empty($_POST['name']) || empty($_POST['textArea'])) {
    echo "Tous les champs doivent être remplis.<br>";
    echo "<a href='formulaire.php'>Retour au formulaire</a>";
} elseif (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
    echo "Adresse email invalide.<br>";
    echo "<a href='formulaire.php'>Retour au formulaire</a>";
} else {
    echo "<h1>Message envoyé avec succès !</h1>";
    echo "email : {$_POST['mail']}<br>";
    echo "prénom : {$_POST['name']}<br>";
    echo "message : {$_POST['textArea']}";
}
?>



<?php
include 'partials/footer.php';
?>