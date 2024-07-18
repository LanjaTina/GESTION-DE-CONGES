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

    public function updateLeave($leaveId, $startDate, $endDate, $reason) {
        $this->db->query('UPDATE leaves SET start_date = :start_date, end_date = :end_date, reason = :reason WHERE id = :id');
        $this->db->bind(':id', $leaveId);
        $this->db->bind(':start_date', $startDate);
        $this->db->bind(':end_date', $endDate);
        $this->db->bind(':reason', $reason);
        return $this->db->execute();
    }
    
    public function getLeaveById($leaveId) {
        $this->db->query('SELECT * FROM leaves WHERE id = :id');
        $this->db->bind(':id', $leaveId);
        return $this->db->single();
    }
    

    public function getLeaves($userId) {
        $this->db->query('SELECT * FROM leaves WHERE user_id = :user_id');
        $this->db->bind(':user_id', $userId);
        return $this->db->resultSet();
    }


    public function deleteLeave($leaveId) {
        $this->db->query('DELETE FROM leaves WHERE id = :id');
        $this->db->bind(':id', $leaveId);
        return $this->db->execute();
    }
    

    // Autres méthodes pour la gestion des congés
}
?>
