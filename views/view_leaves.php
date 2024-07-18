<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Leaves</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>View Leaves</h2>
    <table>
        <thead>
            <tr>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Reason</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($leaves as $leave): ?>
            <tr>
                <td><?php echo $leave->start_date; ?></td>
                <td><?php echo $leave->end_date; ?></td>
                <td><?php echo $leave->reason; ?></td>
                <td>
                    <a href="index.php?controller=Leave&action=edit&id=<?php echo $leave->id; ?>">Edit</a>
                    <a href="index.php?controller=Leave&action=delete&id=<?php echo $leave->id; ?>" onclick="return confirm('Are you sure you want to delete this leave?');">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
