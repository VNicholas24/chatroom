<?php
include '../includes/dbconfig.php';

$id = $_GET["id"];

$sql = "SELECT student_id, student_name, student_email, contact_number, program_enrolled FROM students where student_id = '$id'";
// echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $student_name = $row["student_name"];
    $student_email = $row["student_email"];
    $contact_number = $row["contact_number"];
    $program_enrolled = $row["program_enrolled"];
  }
} else {
  echo "0 results";
}
?>

<div class="container pt-3">
    <form action="dbedit.php" method="post">

      <div class="mb-3">
        <label class="form-label">Student ID</label>
        <input type="text" name="student_id" class="form-control" value="<?= $id ?>" readonly>
      </div>
      <div class="mb-3">
        <label class="form-label">Student Name</label>
        <input type="text" name="student_name" class="form-control" value="<?= $student_name ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Student Email</label>
        <input type="text" name="student_email" class="form-control" value="<?= $student_email ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Contact Number</label>
        <input type="text" name="contact_number" class="form-control" value="<?= $contact_number ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Program Enrolled</label>
        <input type="text" name="program_enrolled" class="form-control" value="<?= $program_enrolled ?>">
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>