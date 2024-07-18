<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leave Response</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .status-approved {
            color: #155724;
        }
        .status-rejected {
            color: #721c24;
        }
        .status-dot {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 5px;
        }
        .dot-approved {
            background-color: #155724;
        }
        .dot-rejected {
            background-color: #721c24;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Leave Response</h2>
        <div class="mb-3 text-right">
            <a href="javascript:history.back()" class="btn btn-secondary">Dashboard</a>
        </div>
        <table class="table table-striped">
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
                    <td class="<?php echo $leave->status == 'approved' ? 'status-approved' : ($leave->status == 'rejected' ? 'status-rejected' : ''); ?>">
                        <?php if ($leave->status == 'approved'): ?>
                            <span class="status-dot dot-approved"></span>
                        <?php elseif ($leave->status == 'rejected'): ?>
                            <span class="status-dot dot-rejected"></span>
                        <?php endif; ?>
                        <?php echo isset($leave->status) ? $leave->status : 'N/A'; ?>
                    </td>
                    <td><?php echo isset($leave->status) && $leave->status == 'rejected' ? $leave->rejection_reason : 'N/A'; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>