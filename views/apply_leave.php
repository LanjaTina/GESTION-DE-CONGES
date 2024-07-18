<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Apply for Leave</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Apply for Leave</h2>
    <form action="index.php?controller=Leave&action=apply" method="POST">
        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" required>
        
        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" required>
        
        <label for="reason">Reason:</label>
        <textarea name="reason" required></textarea>
        
        <button type="submit">Apply</button>
    </form>
</body>
</html>
