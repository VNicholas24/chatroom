<?php
include 'includes/dbconfig.php';

$student_id = $_GET["student_id"];
$chatroom_id = $_GET["chatroom_id"];

$sql = "DELETE FROM students_chatrooms WHERE student_id ='$student_id' AND chatroom_id='$chatroom_id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

?>

<script>
    window.location.href = "index.php";
</script>