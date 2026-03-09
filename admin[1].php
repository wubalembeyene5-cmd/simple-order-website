<?php
include "db.php"; // connect to database
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Orders</title>
  <style>
    body { font-family: sans-serif; background: #fffaf0; padding: 20px; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
    th { background: #ff7f50; color: white; }
  </style>
</head>
<body>
  <h1>📋 All Orders</h1>

  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Address</th>
      <th>Phone</th>
      <th>Items</th>
      <th>Total</th>
      <th>Date</th>
    </tr>

    <?php
    $sql = "SELECT * FROM orders ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
              <td>".$row['id']."</td>
              <td>".$row['name']."</td>
              <td>".$row['address']."</td>
              <td>".$row['phone']."</td>
              <td>".$row['items']."</td>
              <td>".$row['total']."</td>
              <td>".$row['created_at']."</td>
            </tr>";
    }
    ?>
  </table>
</body>
</html>