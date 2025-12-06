<?php
session_start();
require 'db.php';
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}
$user = $_SESSION["user"];
$role = $user["role"];
if ($role === 'employee') {
    $title = "Admin Details";
    $query = "SELECT name, email FROM users WHERE role='admin'";
} else {
    $title = "Employee Details";
    $query = "SELECT name, email FROM users WHERE role='employee'";
}
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Company Portal</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="dashboard.php">Company Portal</a>
    <div class="d-flex">
      <span class="navbar-text text-white me-3">Hello, <?= htmlspecialchars($user["name"]) ?> (<?= ucfirst($role) ?>)</span>
      <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
    </div>
  </div>
</nav>0
<div class="container mt-5">
    <h3><?= $title ?></h3>
    <?php if ($result->num_rows > 0): ?>
        <div class="table-responsive">
            <table class="table table-striped table-bordered shadow-sm">
                <thead class="table-primary">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row["name"]) ?></td>
                            <td><?= htmlspecialchars($row["email"]) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p class="text-muted">No records found.</p>
    <?php endif; ?>
</div>
</body>
</html>
