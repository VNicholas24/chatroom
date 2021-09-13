<?php
include '../includes/dbconfig.php';

$id = $_GET["id"];

$sql = "DELETE FROM students WHERE student_id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

?>

<script>
    window.location.href = "index.php";
</script>