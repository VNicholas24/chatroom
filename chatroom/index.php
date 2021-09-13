<?php
include '../includes/dbconfig.php';
$sql = "SELECT chatroom_id, chatroom_name, chatroom_description, setup_date, chatroom_type FROM chatrooms";
$result = $conn->query($sql);

$conn->close();
?>

<div class="container">
<div class="row pt-3">
    <div class="col-8"><h5>Chatrooms List</h5></div>
    <div class="col-4 text-end"><a class="btn btn-primary" href="create.php" role="button">Add Chatroom</a></div>
  </div>
  <div class="row">
  <table class="table">
    <thead>
        <tr>
          <th>Chatroom ID</th>
          <th>Chatroom Name</th>
          <th>Chatroom Description</th>
          <th>Setup Date</th>
          <th>Chatroom Type</th>
          <th></th>
          <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["chatroom_id"]. "</td><td>" . $row["chatroom_name"]. "</td><td>" . $row["chatroom_description"]. "</td><td>" . $row["setup_date"]. "</td><td>" . $row["chatroom_type"]. "</td><td><a class='btn btn-primary' href='edit.php?id=" . $row["chatroom_id"] . "' role='button'>Edit</a></td><td><a class='btn btn-danger' href='delete.php?id=" . $row["chatroom_id"] . "' role='button'>Delete</a></td>";
            echo "</tr>";
          }
        } else {
          echo "0 results";
        }
        ?>
    </tbody>
  </table>
</div>


