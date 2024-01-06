<?php

class User
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function createUser($username, $email, $password)
    {
        $query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $result = $stmt->execute();
        return $result;
    }

    public function getUsers()
    {
        $query = "SELECT * FROM users";
        $stmt = $this->db->conn->query($query);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function updateUser($id, $username, $email, $password)
    {
        $query = "UPDATE users SET username=:username, email=:email, password=:password WHERE id=:id";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $result = $stmt->execute();
        return $result;
    }

    public function deleteUser($id)
    {
        $query = "DELETE FROM users WHERE id=:id";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $result = $stmt->execute();
        return $result;
    }
}
?>
