<?php
include 'db.php';

$sql = "SELECT * FROM products WHERE status = 'tested'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tested Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Tested Products</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td>
                    <a href="mark_untested.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Mark as Untested</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <a href="index.php" class="btn btn-secondary">Back to All Products</a>
</body>
</html>
