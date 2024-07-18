<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Leave</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Edit Leave</h2>
    <form action="index.php?controller=Leave&action=edit" method="POST">
        <input type="hidden" name="leave_id" value="<?php echo $leave->id; ?>">
        <input type="date" name="start_date" value="<?php echo $leave->start_date; ?>" required>
        <input type="date" name="end_date" value="<?php echo $leave->end_date; ?>" required>
        <textarea name="reason" required><?php echo $leave->reason; ?></textarea>
        <button type="submit">Update Leave</button>
    </form>
</body>
</html>
