<?php

include 'conn_db.php';
include 'database.php';

class Crud
{
    private $pdo;

    public function __construct($config)
    {
        $databaseConnection = new Database($config);
        $this->pdo = $databaseConnection->getConnection();
    }

    public function create($username, $email)
    {
        $query = "INSERT INTO users (username, email) VALUES (:username, :email)";
        $stmt = $this->pdo->prepare($query);

        // Bind parameters
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);

        // Execute the query
        return $stmt->execute();
    }

    public function read()
    {
        $query = "SELECT * FROM users";
        $stmt = $this->pdo->query($query);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($id, $username, $email)
    {
        $query = "UPDATE users SET username = :username, email = :email WHERE id = :id";
        $stmt = $this->pdo->prepare($query);

        // Bind parameters
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':id', $id);

        // Execute the query
        return $stmt->execute();
    }

    public function delete($id)
    {
        $query = "DELETE FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($query);

        // Bind parameters
        $stmt->bindParam(':id', $id);

        // Execute the query
        return $stmt->execute();
    }
}