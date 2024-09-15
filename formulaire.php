<?php
include 'partials/head.php';
?>
<div class="contact">
    <h1>Contactez-nous</h1>
</div>
<div class="text-contact">
    <p>Nous serions ravis de vous entendre ! Que vous ayez des questions, des suggestions ou que vous souhaitiez <br>
        simplement nous dire bonjour, n'hésitez pas à nous contacter via l'une des méthodes ci-dessous.</p>

</div>


<div class="container2">
    <form action="formvalide.php" method="POST">

        <label for="mail" class="form-label">Email</label>
        <input type="text" placeholder="Entrez votre mail" name="mail" class="form-control">

        <label for="name" class="form-label">Prénom</label>
        <input type="text" palceholder="Entez votre prénom" name="name" class="form-control">

        <label for="textArea" class="form-label">Entrez votre message</label>
        <textarea name="textArea" class="form-control"></textarea>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>

<?php
include 'partials/footer.php';
?>