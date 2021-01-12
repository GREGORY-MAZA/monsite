

<?php

$page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_STRING);
echo $page;
if ($page) {
    if ($page == 'accueil') {
        include 'pages/accueil.php';
    }
    elseif ($page == 'hobby') {
        include 'pages/hobby.php';
    }
    elseif ($page == 'contact') {
        include 'pages/contact.php';
    }else{
        echo '404';
    }

}
else {

    include 'pages/accueil.php';
}









