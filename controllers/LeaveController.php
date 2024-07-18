<?php
class LeaveController {
    public function apply() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userId = $_SESSION['user_id'];
            $startDate = $_POST['start_date'];
            $endDate = $_POST['end_date'];
            $reason = $_POST['reason'];
            $leaveModel = new Leave();
            if ($leaveModel->applyLeave($userId, $startDate, $endDate, $reason)) {
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
            require 'views/edit-leave.php';
        }
    }
    
    public function delete() {
        $leaveId = $_GET['id'];
        $leaveModel = new Leave();
        if ($leaveModel->deleteLeave($leaveId)) {
            header('Location: index.php?controller=Leave&action=view');
        } else {
            echo 'Failed to delete leave';
        }
    }
    

    public function view() {
        $leaveModel = new Leave();
        $leaves = $leaveModel->getLeaves($_SESSION['user_id']);
        require 'views/view_leaves.php';
    }

    public function adminView() {
        $leaveModel = new Leave();
        $leaves = $leaveModel->getAllLeaves();
        require 'views/admin_view_leaves.php';
    }

    public function approve() {
        $leaveId = $_GET['id'];
        $leaveModel = new Leave();
        if ($leaveModel->approveLeave($leaveId)) {
            header('Location: index.php?controller=Leave&action=adminView');
        } else {
            echo 'Failed to approve leave';
        }
    }

    public function reject() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $leaveId = $_POST['leave_id'];
            $reason = $_POST['rejection_reason'];
            $leaveModel = new Leave();
            if ($leaveModel->rejectLeave($leaveId, $reason)) {
                header('Location: index.php?controller=Leave&action=adminView');
            } else {
                echo 'Failed to reject leave';
            }
        } else {
            $leaveId = $_GET['id'];
            require 'views/reject_leave.php';
        }
    }

    public function response() {
        $leaveModel = new Leave();
        $leaves = $leaveModel->getLeaves($_SESSION['user_id']);
        require 'views/response_leaves.php';
    }

    public function dashboard() {
        require 'views/dashboard.php';
    }
}
?>