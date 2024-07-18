<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reject Leave</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2>Reject Leave</h2>
        <form action="index.php?controller=Leave&action=reject" method="POST">
            <input type="hidden" name="leave_id" value="<?php echo $_GET['id']; ?>">
            <div class="form-group">
                <label for="rejection_reason">Reason for Rejection:</label>
                <textarea name="rejection_reason" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-danger">Reject Leave</button>
        </form>
    </div>
</body>
</html>