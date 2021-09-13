<?php
include '../includes/dbconfig.php';

$id = $_GET["id"];

$sql = "DELETE FROM chatrooms WHERE chatroom_id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

?>

<script>
    window.location.href = "index.php";
</script>