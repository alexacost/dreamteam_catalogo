<?php

if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    session_start();

    $conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'dreamteam_catalogo'
);
}

//if (isset($conn)) {
//echo 'Db is connected';
//}
?>