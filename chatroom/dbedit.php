<?php
include '../includes/dbconfig.php';

$chatroom_id = $_POST["chatroom_id"];
$chatroom_name = $_POST["chatroom_name"];
$chatroom_description = $_POST["chatroom_description"];
$setup_date = $_POST["setup_date"];
$chatroom_type = $_POST["chatroom_type"];

// $sql = "INSERT INTO students (student_id, student_name, student_email, contact_number, program_enrolled)
$sql = "UPDATE chatrooms SET chatroom_name='$chatroom_name', chatroom_description='$chatroom_description', setup_date='$setup_date', chatroom_type='$chatroom_type' WHERE chatroom_id='$chatroom_id'";

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