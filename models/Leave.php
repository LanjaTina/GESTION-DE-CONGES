<?php
class Leave {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function applyLeave($userId, $startDate, $endDate, $reason) {
        $this->db->query('INSERT INTO leaves (user_id, start_date, end_date, reason) VALUES (:user_id, :start_date, :end_date, :reason)');
        $this->db->bind(':user_id', $userId);
        $this->db->bind(':start_date', $startDate);
        $this->db->bind(':end_date', $endDate);
        $this->db->bind(':reason', $reason);
        return $this->db->execute();
    }

    public function getLeaves($userId) {
        $this->db->query('SELECT * FROM leaves WHERE user_id = :user_id');
        $this->db->bind(':user_id', $userId);
        return $this->db->resultSet();
    }

    // Autres méthodes pour la gestion des congés
}
?>
