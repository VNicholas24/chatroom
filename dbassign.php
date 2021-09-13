<?php

include 'includes/dbconfig.php';

$student_id = $_POST["student_id"];
$chatroom_id = $_POST["chatroom_id"];
$roles = $_POST["roles"];

$sql = "INSERT INTO students_chatrooms (student_id, chatroom_id, roles)
VALUES ('$student_id', '$chatroom_id', '$roles')";

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