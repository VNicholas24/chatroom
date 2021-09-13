<?php
include '../includes/dbconfig.php';
?>

<div class="container pt-3">
    <form action="dbcreate.php" method="post">

      <div class="mb-3">
        <label class="form-label">Chatroom ID</label>
        <input type="text" name="chatroom_id" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Chatroom Name</label>
        <input type="text" name="chatroom_name" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Chatroom Description</label>
        <input type="text" name="chatroom_description" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Chatroom Type</label>
        <input type="text" name="chatroom_type" class="form-control">
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>