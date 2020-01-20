<?php

    session_start();


    require "controler/FrontEndController.php";
    require "controler/BackEndController.php";

if (isset($_GET['action'])) {
    if ($_GET['action'] == "home") {
        home();
    }else if($_GET['action'] == "contact") {
        contact();
    }
    else {
        pageError();
    }
} else {
    home();
}

?>