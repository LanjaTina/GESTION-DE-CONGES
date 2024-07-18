<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leave Response</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Leave Response</h2>
    <table>
        <thead>
            <tr>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Reason</th>
                <th>Status</th>
                <th>Rejection Reason</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($leaves as $leave): ?>
            <tr>
                <td><?php echo $leave->start_date; ?></td>
                <td><?php echo $leave->end_date; ?></td>
                <td><?php echo $leave->reason; ?></td>
                <td><?php echo isset($leave->status) ? $leave->status : 'N/A'; ?></td>
                <td><?php echo isset($leave->status) && $leave->status == 'rejected' ? $leave->rejection_reason : 'N/A'; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>