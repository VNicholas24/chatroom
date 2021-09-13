<?php
include '../includes/dbconfig.php';
$sql = "SELECT group_meeting_id, group_meeting_name, group_meeting_start_date, group_meeting_end_date, group_meeting_start_time, group_meeting_end_time, group_meeting_chair_person, chatroom_id FROM group_meetings";
$result = $conn->query($sql);

$conn->close();
?>

<div class="container">
  <div class="row pt-3">
    <div class="col-8">
      <h5>Group Meetings List</h5>
    </div>
    <div class="col-4 text-end"><a class="btn btn-primary" href="create.php" role="button">Add Group Meeting</a></div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>Group Meeting ID</th>
        <th>Group Meeting Name</th>
        <th>Group Meeting Start Date</th>
        <th>Group Meeting End Date</th>
        <th>Group Meeting Start Time</th>
        <th>Group Meeting End Time</th>
        <th>Group Meeting Chairperson</th>
        <th>Chatroom ID</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["group_meeting_id"] . "</td><td>" . $row["group_meeting_name"] . "</td><td>" . $row["group_meeting_start_date"] . "</td><td>" . $row["group_meeting_end_date"] . "</td><td>" . $row["group_meeting_start_time"] . "</td><td>" . $row["group_meeting_end_time"] . "</td><td>" . $row["group_meeting_chair_person"] . "</td><td>" . $row["chatroom_id"] . "</td><td><a class='btn btn-primary' href='edit.php?id=" . $row["group_meeting_id"] . "' role='button'>Edit</a></td><td><a class='btn btn-danger' href='delete.php?id=" . $row["group_meeting_id"] . " 'role='button'>Delete</a></td>";
          echo "</tr>";
        }
      } else {
        echo "0 results";
      }
      ?>
    </tbody>
  </table>
</div>