<?php
include '../includes/dbconfig.php';

$student_id = $_POST["student_id"];
$student_name = $_POST["student_name"];
$student_email = $_POST["student_email"];
$contact_number = $_POST["contact_number"];
$program_enrolled = $_POST["program_enrolled"];

$sql = "INSERT INTO students (student_id, student_name, student_email, contact_number, program_enrolled)
VALUES ('$student_id', '$student_name', '$student_email', '$contact_number', '$program_enrolled')";

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