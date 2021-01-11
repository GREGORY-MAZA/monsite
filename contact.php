<?php
$metaTitle = "Contact Page !";
$metaDescription = 'Envoyez-moi un message !';
require 'header.php';
?>

<main id="MAINFORM">

    <h3>CONTACT</h3>

    <form action="https://httpbin.org/post" method="post">


        <fieldset>

            Civilité :<br />
            <input type="radio" name="civi" value="Mme" /> Madame
            <input type="radio" name="civi" value="Mlle" /> Mademoiselle
            <input type="radio" name="civi" value="Mr" /> Monsieur <br>

            Votre Nom :<br />
            <input type="text" name="prenom"/><br>

            Vous êtes :<br />
            <select name="profil" style="width: 300px; height: 40px;">
                <option value="parti">Un particulier</option>
                <option value="profe">Un professionnel</option>
                <option value="insti">Un institutionnel</option>
            </select><br>

            <textarea name="le-message" rows="10" cols="70"></textarea>
            <input type="submit" name="Envoyer" style="width: 100px; height: 40px;">

        </fieldset>
    </form>
</main>

<?php
require 'footer.php';
?>
