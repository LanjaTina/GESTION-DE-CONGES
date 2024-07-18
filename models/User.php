<?php
class User {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function login($username, $password) {
        $this->db->query('SELECT * FROM users WHERE username = :username AND password = :password');
        $this->db->bind(':username', $username);
        $this->db->bind(':password', md5($password));
        return $this->db->single();
    }

    public function register($username, $password) {
        $this->db->query('INSERT INTO users (username, password) VALUES (:username, :password)');
        $this->db->bind(':username', $username);
        $this->db->bind(':password', md5($password));
        return $this->db->execute();
    }

    // Autres méthodes comme l'inscription, la récupération de l'utilisateur, etc.
}
?>