

<?php

//l'index 'page' est il définit dans le tableau GET


if (isset($_GET['page'])) {


    if ($_GET["page"] == 'accueil') {
        include 'pages/accueil.php';
    }
    elseif ($_GET["page"] == 'hobby') {
        include 'pages/hobby.php';
    }
    elseif ($_GET["page"] == 'contact') {
        include 'pages/contact.php';
    }

}
else {

    include 'pages/accueil.php';
}








