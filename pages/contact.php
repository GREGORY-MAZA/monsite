<?php
$metaTitle = "Contact Page !";
$metaDescription = 'Envoyez-moi un message !';
require 'header.php';
$reponsecivi = filter_input(INPUT_POST, 'civi' );
echo $reponsecivi;
$repmail = filter_input(INPUT_POST, 'email' );
echo $repmail;

$repnom = filter_input( INPUT_POST,'Nom');
echo $repnom;
//file_put_contents(contact / contact_Y - m - d - H - i - s . txt, string)
//file_put_contents (contact/contact_Y-m-d-H-i-s.txt) : string
file_put_contents('contact/contact_Y-m-d-H-i-s.txt', $repmail);
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
