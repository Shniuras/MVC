<?php

class User {

    private $db;

    function __construct(Database $db){
        $this->db = $db;
    }

    // Get all users
    public function getAllUsers() : array {
        return $this->db->select("SELECT id, username FROM users");
    }

    // Remove user by ID
    public function removeUser(int $id) : bool {
        return $this->db->remove("DELETE FROM users WHERE id = :id",
            ["id" => $id]);
    }

}