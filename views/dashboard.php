<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .dashboard-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .btn-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container dashboard-container">
        <h2>TONGASOA, <?php echo $_SESSION['username']; ?>!</h2>
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="index.php?controller=Leave&action=apply" class="btn btn-primary">Apply for Leave</a>
            <a href="index.php?controller=Leave&action=view" class="btn btn-secondary">View Leaves</a>
            <a href="index.php?controller=Leave&action=response" class="btn btn-info">Leave Response</a>
        </div>
        <a href="index.php?controller=User&action=logout" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>