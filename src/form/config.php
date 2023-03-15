<?php
    session_start();

    define("HOST", "localhost");
    define("USER", "rosa");
    define("PASS", "Mmcfan007");
    define("DB", "library_mng");

    $connect = mysqli_connect(HOST, USER, PASS, DB);
?>
