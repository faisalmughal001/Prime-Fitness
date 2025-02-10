<?php
include 'db.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>All Products</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td>
                    <?php if ($row['status'] == 'untested'): ?>
                        <a href="mark_tested.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">Mark as Tested</a>
                    <?php else: ?>
                        <a href="mark_untested.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Mark as Untested</a>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <a href="tested.php" class="btn btn-primary">View Tested Products</a>
    <a href="untested.php" class="btn btn-secondary">View Untested Products</a>
</body>
</html>
