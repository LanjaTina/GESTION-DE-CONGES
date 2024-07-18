<?php
class LeaveController {
    public function apply() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userId = $_SESSION['user_id'];
            $startDate = $_POST['start_date'];
            $endDate = $_POST['end_date'];
            $reason = $_POST['reason'];
            $leaveModel = new Leave();
            if ($leaveModel->applyLeave($userId, startDate, $endDate, $reason)) {
                header('Location: index.php?controller=Leave&action=view');
            } else {
                echo 'Failed to apply for leave';
            }
        } else {
            require 'views/apply_leave.php';
        }
    }

    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $leaveId = $_POST['leave_id'];
            $startDate = $_POST['start_date'];
            $endDate = $_POST['end_date'];
            $reason = $_POST['reason'];
            $leaveModel = new Leave();
            if ($leaveModel->updateLeave($leaveId, $startDate, $endDate, $reason)) {
                header('Location: index.php?controller=Leave&action=view');
            } else {
                echo 'Failed to update leave';
            }
        } else {
            $leaveId = $_GET['id'];
            $leaveModel = new Leave();
            $leave = $leaveModel->getLeaveById($leaveId);
            require 'views/edit_leave.php';
        }
    }
    

    public function view() {
        $leaveModel = new Leave();
        $leaves = $leaveModel->getLeaves($_SESSION['user_id']);
        require 'views/view_leaves.php';
    }

    public function dashboard() {
        require 'views/dashboard.php';
    }
}
?>
