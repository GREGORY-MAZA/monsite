<?php
$metaTitle = "Contact Page !";
$metaDescription = 'Envoyez-moi un message !';
require 'header.php';
$reponsecivi = filter_input(INPUT_POST, 'civi' );
echo $reponsecivi;
$repnom = filter_input( INPUT_POST,'Nom');
echo $repnom;
$repPrenom = filter_input(INPUT_POST, 'prénom' );
echo $repPrenom;
$repmail = filter_input(INPUT_POST, 'email' );
echo $repmail;
$raison = filter_input( INPUT_POST,'raison');
echo $raison;
$message = filter_input( INPUT_POST,'le-message');
echo $message;

file_put_contents('contact/contact_Y-m-d-H-i-s.txt', $repmail,FILE_APPEND);
file_put_contents('contact/contact_Y-m-d-H-i-s.txt', $reponsecivi, FILE_APPEND);
file_put_contents('contact/contact_Y-m-d-H-i-s.txt', $repnom, FILE_APPEND);
file_put_contents('contact/contact_Y-m-d-H-i-s.txt', $repPrenom, FILE_APPEND);
file_put_contents('contact/contact_Y-m-d-H-i-s.txt', $raison,FILE_APPEND);
file_put_contents('contact/contact_Y-m-d-H-i-s.txt', $message, FILE_APPEND);

?>

<main id="MAINFORM">

    <h3>CONTACT</h3>

    <form action="index.php?page=contact" method="post">


        <fieldset>

            Civilité :<br />
            <input type="radio" name="civi" value="Mme" /> Madame
            <input type="radio" name="civi" value="Mlle" /> Mademoiselle
            <input type="radio" name="civi" value="Mr" /> Monsieur <br>

            Votre Nom :<br />
            <input type="text" name="Nom"/><br>

            Votre Prénom :<br />
            <input type="text" name="prénom"/><br>

            Votre email :<br />
            <input type="email" name="email"/><br>
            <br>

            Raison du contact :<br />
            <br>
            <input type="radio" name="raison" value="proposition d’emploi"/> Proposition d’emploi <br>
            <input type="radio" name="raison" value="demande d’information"/> Demande d’information <br>
            <input type="radio" name="raison" value="prestations"/> Prestations <br>
            <br>

            Vous êtes :<br />
            <select name="profil" style="width: 300px; height: 40px;">
                <option value="particulier">Un particulier</option>
                <option value="professionnel">Un professionnel</option>
                <option value="institutionnel">Un institutionnel</option>
            </select><br>

            <textarea name="le-message" rows="10" cols="70"></textarea>
            <input type="submit" name="Envoyer" style="width: 100px; height: 40px;">

        </fieldset>

    </form>
</main>


<?php
require 'footer.php';
?>
