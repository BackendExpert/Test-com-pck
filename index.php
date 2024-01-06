<?php

include 'user.php';

// Usage example:
$crud = new Crud($dbConfig);


// $username = 'john_doe';
// $email = 'john.doe@example.com';
// $crud->create($username, $email);

//-------------------------
// $users = $crud->read();
// echo "Read all users:\n";
// print_r($users);

// //-------------------------------
// $userToUpdate = 5; 
// $newUsername = 'updated_john_doe';
// $newEmail = 'updated.john.doe@example.com';
// $crud->update($userToUpdate, $newUsername, $newEmail);

// $updatedUsers = $crud->read();
// echo "Read all users after update:\n";
// print_r($updatedUsers);

// //--------------------------


$userToDelete = 8; 
$crud->delete($userToDelete);

$remainingUsers = $crud->read();
echo "Read all users after delete:\n";
print_r($remainingUsers);
