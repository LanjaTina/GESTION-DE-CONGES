<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reject Leave</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Reject Leave</h2>
    <form action="index.php?controller=Leave&action=reject" method="POST">
        <input type="hidden" name="leave_id" value="<?php echo $_GET['id']; ?>">
        <label for="rejection_reason">Reason for Rejection:</label>
        <textarea name="rejection_reason" required></textarea>
        <button type="submit">Reject Leave</button>
    </form>
</body>
</html>