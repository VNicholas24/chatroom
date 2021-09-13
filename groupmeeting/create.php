<?php
include '../includes/dbconfig.php';

$sql = "SELECT chatroom_id, chatroom_name, chatroom_description, setup_date, chatroom_type FROM chatrooms";
$result = $conn->query($sql);

$conn->close();
?>

<div class="container pt-3">
  <form action="dbcreate.php" method="post">

    <div class="mb-3">
      <label class="form-label">Group Meeting ID</label>
      <input type="text" name="group_meeting_id" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Group Meeting Name</label>
      <input type="text" name="group_meeting_name" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Group Meeting Start Date</label>
      <input type="text" name="group_meeting_start_date" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Group Meeting End Date</label>
      <input type="text" name="group_meeting_end_date" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Group Meeting Start Time</label>
      <input type="text" name="group_meeting_start_time" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Group Meeting End Time</label>
      <input type="text" name="group_meeting_end_time" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Group Meeting Chair Person</label>
      <input type="text" name="group_meeting_chair_person" class="form-control">
    </div>
    <div class="mb-3">
    <label class="form-label">Chatroom</label>
      <select class="form-select" name="chatroom_id">
        <?php
        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row["chatroom_id"] . "'>" . $row["chatroom_id"] . " | " . $row["chatroom_name"] . " | " . $row["chatroom_description"] . "</option>";
          }
        }
        ?>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>