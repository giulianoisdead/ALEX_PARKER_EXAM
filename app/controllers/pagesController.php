<?php 

namespace App\Controllers\PagesController;

use \PDO;

function homeAction (PDO $connexion) {

    // Je vais demander des données aux modèles



    // Je charge la vue 'home' dans $content

    global $content, $title;
    $title = 'homePage';

    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();

}