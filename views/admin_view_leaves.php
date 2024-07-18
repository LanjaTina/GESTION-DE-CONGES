<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - View Leaves</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Admin - View Leaves</h2>
    <div>
        <a href="index.php?controller=User&action=logout" class="button">Logout</a>
    </div>
    <table>
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
                <td><?php echo $leave->status; ?></td>
                <td>
                    <?php if ($leave->status == 'pending'): ?>
                        <a href="index.php?controller=Leave&action=approve&id=<?php echo $leave->id; ?>">Approve</a>
                        <a href="index.php?controller=Leave&action=reject&id=<?php echo $leave->id; ?>">Reject</a>
                    <?php elseif ($leave->status == 'rejected'): ?>
                        <p>Rejection Reason: <?php echo $leave->rejection_reason; ?></p>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>