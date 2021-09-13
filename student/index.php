<?php
include '../includes/dbconfig.php';
$sql = "SELECT student_id, student_name, student_email, contact_number, program_enrolled FROM students";
$result = $conn->query($sql);

$conn->close();
?>

<div class="container">
  <div class="row pt-3">
    <div class="col-8"><h5>Student List</h5></div>
    <div class="col-4 text-end"><a class="btn btn-primary" href="create.php" role="button">Add Student</a></div>
  </div>
  <div class="row">
    <table class="table">
      <thead>
        <tr>
          <th>Student ID</th>
          <th>Student Name</th>
          <th>Student Email</th>
          <th>Contact Number</th>
          <th>Program Enrolled</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["student_id"] . "</td><td>" . $row["student_name"] . "</td><td>" . $row["student_email"] . "</td><td>" . $row["contact_number"] . "</td><td>" . $row["program_enrolled"] . "</td><td><a class='btn btn-primary' href='edit.php?id=" . $row["student_id"] . "' role='button'>Edit</a></td><td><a class='btn btn-danger' href='delete.php?id=" . $row["student_id"] . " 'role='button'>Delete</a></td>";
            echo "</tr>";
          }
        } else {
          echo "0 results";
        }
        ?>
      </tbody>
    </table>
  </div>
</div>