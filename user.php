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
        $query = "INSERT INTO user_tbl (username, email, join_at) VALUES (:username, :email, NOW())";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $result = $stmt->execute();
        return $result;
    }

    public function getUsers()
    {
        $query = "SELECT * FROM user_tbl";
        $stmt = $this->db->conn->query($query);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function updateUser($id, $username, $email, $password)
    {
        $query = "UPDATE user_tbl SET username=:username, email=:email WHERE id=:id";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $result = $stmt->execute();
        return $result;
    }

    public function deleteUser($id)
    {
        $query = "DELETE FROM user_tbl WHERE id=:id";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $result = $stmt->execute();
        return $result;
    }
}
?>
