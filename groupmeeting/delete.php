<?php
include '../includes/dbconfig.php';

$id = $_GET["id"];

$sql = "DELETE FROM group_meetings WHERE group_meeting_id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

?>

<script>
    window.location.href = "index.php";
</script>