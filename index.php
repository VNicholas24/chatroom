<?php
include 'includes/dbconfig.php';
$sql = "SELECT student_id, student_name, student_email, contact_number, program_enrolled FROM students";
$sql2 = "SELECT chatroom_id, chatroom_name FROM chatrooms";
$sql3 = "SELECT s.student_id, s.student_name, c.chatroom_id, c.chatroom_name, sc.date_joined, sc.roles FROM students_chatrooms sc JOIN chatrooms c ON sc.chatroom_id = c.chatroom_id JOIN students s ON sc.student_id = s.student_id";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);

$conn->close();
?>

<div class="container">
    <form class="row mt-2" action="dbassign.php" method="POST">
        <div class="col-3">
            <label class="form-label">Student</label>
            <select class="form-select" name="student_id">
                <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["student_id"] . "'>" . $row["student_id"] . " | " . $row["student_name"] . "</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="col-3">
            <label class="form-label">Chatroom</label>
            <select class="form-select" name="chatroom_id">
                <?php
                if ($result2->num_rows > 0) {
                    // output data of each row
                    while ($row = $result2->fetch_assoc()) {
                        echo "<option value='" . $row["chatroom_id"] . "'>" . $row["chatroom_id"] . " | " . $row["chatroom_name"] . "</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="col-3">
            <label class="form-label">Role</label>
            <select class="form-select" name="roles">
                <option>Owner</option>
                <option>Moderator</option>
                <option>Admin</option>
                <option>Member</option>
            </select>
        </div>
        <div class="col-3"><button type="submit" class="btn btn-primary mt-4">Assign</button></div>
    </form>
    <table class="row">
    <div class="col-8">
      <h5>Student Chatroom List</h5>
    </div>
  <table class="table">
    <thead>
      <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Chatroom ID</th>
        <th>Chatroom Name</th>
        <th>Date</th>
        <th>Roles</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($result3->num_rows > 0) {
        // output data of each row
        while ($row = $result3->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["student_id"] . "</td><td>" . $row["student_name"] . "</td><td>" . $row["chatroom_id"] . "</td><td>" . $row["chatroom_name"] . "</td><td>" . $row["date_joined"] . "</td><td>" . $row["roles"] . "</td><td><a class='btn btn-danger' href='dbunassign.php?student_id=" . $row["student_id"] . "&chatroom_id=" . $row["chatroom_id"] . " 'role='button'>Unassign</a></td>";
          echo "</tr>";
        }
      } else {
        echo "0 results";
      }
      ?>
    </tbody>
    </table>
</div>