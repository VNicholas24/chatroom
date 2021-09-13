<?php
include '../includes/dbconfig.php';

$id = $_GET["id"];

$sql = "SELECT group_meeting_id, group_meeting_name, group_meeting_start_date, group_meeting_end_date, group_meeting_start_time, group_meeting_end_time, group_meeting_chair_person, chatroom_id FROM group_meetings where group_meeting_id = '$id'";
// echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $group_meeting_name = $row["group_meeting_name"];
    $group_meeting_start_date = $row["group_meeting_start_date"];
    $group_meeting_end_date = $row["group_meeting_end_date"];
    $group_meeting_start_time = $row["group_meeting_start_time"];
    $group_meeting_end_time = $row["group_meeting_end_time"];
    $group_meeting_chair_person = $row["group_meeting_chair_person"];
    $chatroom_id = $row["chatroom_id"];
  }
} else {
  echo "0 results";
}

$sql2 = "SELECT chatroom_id, chatroom_name, chatroom_description, setup_date, chatroom_type FROM chatrooms";
$result2 = $conn->query($sql2);
?>

<div class="container pt-3">
    <form action="dbedit.php" method="post">

      <div class="mb-3">
        <label class="form-label">Group Meeting ID</label>
        <input type="text" name="group_meeting_id" class="form-control" value="<?= $id ?>" readonly>
      </div>
      <div class="mb-3">
        <label class="form-label">Group Meeting Name</label>
        <input type="text" name="group_meeting_name" class="form-control" value="<?= $group_meeting_name ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Group Meeting Start Date</label>
        <input type="text" name="group_meeting_start_date" class="form-control" value="<?= $group_meeting_start_date ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Group Meeting End Date</label>
        <input type="text" name="group_meeting_end_date" class="form-control" value="<?= $group_meeting_end_date ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Group Meeting Start Time</label>
        <input type="text" name="group_meeting_start_time" class="form-control" value="<?= $group_meeting_start_time ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Group Meeting End Time</label>
        <input type="text" name="group_meeting_end_time" class="form-control" value="<?= $group_meeting_end_time ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Group Meeting Chairperson</label>
        <input type="text" name="group_meeting_chair_person" class="form-control" value="<?= $group_meeting_chair_person ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Chatroom ID</label>
        <select class="form-select" name="chatroom_id">
        <?php
        if ($result2->num_rows > 0) {
          // output data of each row
          while ($row = $result2->fetch_assoc()) {
            if ($chatroom_id == $row["chatroom_id"]) {
              echo "<option value='" . $row["chatroom_id"] . "' selected='selected'>" . $row["chatroom_id"] . " | " . $row["chatroom_name"] . " | " . $row["chatroom_description"] . "</option>";
            } else {
              echo "<option value='" . $row["chatroom_id"] . "'>" . $row["chatroom_id"] . " | " . $row["chatroom_name"] . " | " . $row["chatroom_description"] . "</option>";
            }
            
          }
        }
        ?>
      </select>
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>