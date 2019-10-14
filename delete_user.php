<?php
    include('database/users.php');
    session_start();
    user_del($_SESSION['user_id']);
    $_SESSION['user_id'] = NULL;
    session_destroy();
    header('location: index.php');
?>