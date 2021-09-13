<?php
include '../includes/dbconfig.php';

$id = $_GET["id"];

$sql = "SELECT chatroom_id, chatroom_name, chatroom_description, setup_date, chatroom_type FROM chatrooms where chatroom_id = '$id'";
// echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $chatroom_name = $row["chatroom_name"];
    $chatroom_description = $row["chatroom_description"];
    $setup_date = $row["setup_date"];
    $chatroom_type = $row["chatroom_type"];
  }
} else {
  echo "0 results";
}
?>

<div class="container pt-3">
    <form action="dbedit.php" method="post">

      <div class="mb-3">
        <label class="form-label">Chatroom ID</label>
        <input type="text" name="chatroom_id" class="form-control" value="<?= $id ?>" readonly>
      </div>
      <div class="mb-3">
        <label class="form-label">Chatroom Name</label>
        <input type="text" name="chatroom_name" class="form-control" value="<?= $chatroom_name ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Chatroom Description</label>
        <input type="text" name="chatroom_description" class="form-control" value="<?= $chatroom_description ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Setup Date</label>
        <input type="text" name="setup_date" class="form-control" value="<?= $setup_date ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Chatroom Type</label>
        <input type="text" name="chatroom_type" class="form-control" value="<?= $chatroom_type ?>">
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>