<?php
include '../includes/dbconfig.php';
?>

<div class="container pt-3">
    <form action="dbcreate.php" method="post">

      <div class="mb-3">
        <label class="form-label">Student ID</label>
        <input type="text" name="student_id" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Student Name</label>
        <input type="text" name="student_name" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Student Email</label>
        <input type="text" name="student_email" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Contact Number</label>
        <input type="text" name="contact_number" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Program Enrolled</label>
        <input type="text" name="program_enrolled" class="form-control">
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>