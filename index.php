<?php 
    require_once 'database.php';
    require_once 'user.php';

    $dbc = new Database();
    $user = new User();

    $user->createUser('john_doe', 'john@example.com', password_hash('password123', PASSWORD_DEFAULT));

?>