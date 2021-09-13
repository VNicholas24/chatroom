<?php
include '../includes/dbconfig.php';

$group_meeting_id = $_POST["group_meeting_id"];
$group_meeting_name = $_POST["group_meeting_name"];
$group_meeting_start_date = $_POST["group_meeting_start_date"];
$group_meeting_end_date = $_POST["group_meeting_end_date"];
$group_meeting_start_time = $_POST["group_meeting_start_time"];
$group_meeting_end_time = $_POST["group_meeting_end_time"];
$group_meeting_chair_person = $_POST["group_meeting_chair_person"];
$chatroom_id = $_POST["chatroom_id"];

$sql = "INSERT INTO group_meetings (group_meeting_id, group_meeting_name, group_meeting_start_date, group_meeting_end_date, group_meeting_start_time, group_meeting_end_time, group_meeting_chair_person, chatroom_id)
VALUES ('$group_meeting_id', '$group_meeting_name', '$group_meeting_start_date', '$group_meeting_end_date', '$group_meeting_start_time', '$group_meeting_end_time', '$group_meeting_chair_person', '$chatroom_id')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<script>
    // window.location.replace('index.php');
</script>