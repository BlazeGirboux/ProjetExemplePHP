<!-- entièrement composée de code php qui va chercher ce dont on a besoin pour fabriquer la page -->

<?php       // non fermé car seulement du php

    require_once("Controllers/indexController.php");
    require_once("Controllers/userController.php");
    require_once("Config/connectDataBase.php");

    // on ajoutera par la suite le fichier de configuration de la connextion à la bdd
    // ainsi que le session_start();
    // et le fichier des constantes.

