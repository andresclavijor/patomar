<?php

session_start();
if(!isset($_SESSION['id_user']) && !isset($_SESSION['nombre']) && !isset($_SESSION['correo'])){
    header('Location: ../login_users.php');
} else {
    session_destroy();
    header('Location: ../login_users.php?logout=1');
}

?>