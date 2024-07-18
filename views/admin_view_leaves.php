<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - View Leaves</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2>Admin - View Leaves</h2>
        <div class="mb-3 text-right">
            <a href="index.php?controller=User&action=logout" class="btn btn-danger">Logout</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Reason</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($leaves as $leave): ?>
                <tr>
                    <td><?php echo $leave->user_id; ?></td>
                    <td><?php echo $leave->username; ?></td>
                    <td><?php echo $leave->start_date; ?></td>
                    <td><?php echo $leave->end_date; ?></td>
                    <td><?php echo $leave->reason; ?></td>
                    <td>
                        <?php if ($leave->status == 'approved'): ?>
                            <span class="status-dot dot-approved"></span>
                        <?php elseif ($leave->status == 'rejected'): ?>
                            <span class="status-dot dot-rejected"></span>
                        <?php endif; ?>
                        <?php echo $leave->status; ?>
                    </td>
                    <td>
                        <?php if ($leave->status == 'pending'): ?>
                            <a href="index.php?controller=Leave&action=approve&id=<?php echo $leave->id; ?>" class="btn btn-success btn-sm">Approve</a>
                            <a href="index.php?controller=Leave&action=reject&id=<?php echo $leave->id; ?>" class="btn btn-danger btn-sm">Reject</a>
                        <?php elseif ($leave->status == 'rejected'): ?>
                            <p>Rejection Reason: <?php echo $leave->rejection_reason; ?></p>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>