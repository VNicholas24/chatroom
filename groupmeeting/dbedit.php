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

// $sql = "INSERT INTO students (student_id, student_name, student_email, contact_number, program_enrolled)
$sql = "UPDATE group_meetings SET group_meeting_name='$group_meeting_name', group_meeting_start_date='$group_meeting_start_date', group_meeting_end_date='$group_meeting_end_date', group_meeting_start_time='$group_meeting_start_time', group_meeting_end_time='$group_meeting_end_time', group_meeting_chair_person='$group_meeting_chair_person', chatroom_id='$chatroom_id' WHERE group_meeting_id='$group_meeting_id'";

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<script>
    window.location.replace('index.php');
</script>