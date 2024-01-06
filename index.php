<?php 
    require_once 'database.php';
    require_once 'user.php';

    $dbc = new Database();
    $user = new User($dbc);

    // $user->createUser('Jehan', 'jehan@example.com', password_hash('2563985', PASSWORD_DEFAULT));

    $users = $user->getUsers();
    print_r($users);

    // $user->updateUser(2, 'JehanKandy', 'jkany@example.com', password_hash('5563333', PASSWORD_DEFAULT));

    $user->deleteUser(2);

?>