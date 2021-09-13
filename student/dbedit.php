<?php
include '../includes/dbconfig.php';

$student_id = $_POST["student_id"];
$student_name = $_POST["student_name"];
$student_email = $_POST["student_email"];
$contact_number = $_POST["contact_number"];
$program_enrolled = $_POST["program_enrolled"];

// $sql = "INSERT INTO students (student_id, student_name, student_email, contact_number, program_enrolled)
$sql = "UPDATE students SET student_name='$student_name', student_email='$student_email', contact_number='$contact_number', program_enrolled='$program_enrolled' WHERE student_id='$student_id'";

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