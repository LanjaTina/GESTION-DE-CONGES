<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <a href="index.php?controller=Leave&action=apply">Apply for Leave</a>
    <a href="index.php?controller=Leave&action=view">View Leaves</a>
    <a href="index.php?controller=User&action=logout">Logout</a>
</body>
</html>
