<?php
include '../includes/dbconfig.php';

$chatroom_id = $_POST["chatroom_id"];
$chatroom_name = $_POST["chatroom_name"];
$chatroom_description = $_POST["chatroom_description"];
$chatroom_type = $_POST["chatroom_type"];

$sql = "INSERT INTO chatrooms (chatroom_id, chatroom_name, chatroom_description, chatroom_type)
VALUES ('$chatroom_id', '$chatroom_name', '$chatroom_description', '$chatroom_type')";

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