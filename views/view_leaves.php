<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Leaves</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <div class="container mt-5">
        <h2>View Leaves</h2>
        <div class="mb-3 text-right">
        <a href="javascript:history.back()" class="btn btn-secondary">Dashboard</a>
            <a href="index.php?controller=Leave&action=apply" class="btn btn-primary">Add Leave</a>
            <a href="index.php?controller=User&action=logout" class="btn btn-danger">Logout</a>
        </div>
        <table class="table table-striped">
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
                        <a href="index.php?controller=Leave&action=edit&id=<?php echo $leave->id; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="index.php?controller=Leave&action=delete&id=<?php echo $leave->id; ?>" class="btn btn-danger btn-sm" onclick="confirmDelete(event, '<?php echo $leave->id; ?>')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>
        function confirmDelete(event, id) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'index.php?controller=Leave&action=delete&id=' + id;
                }
            });
        }
    </script>
</body>
</html>