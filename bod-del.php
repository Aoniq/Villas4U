<?php
include("config.php");
echo "t";
$id = $_GET['id'];
$mail = $_GET['m'];
$stmt = $connection -> prepare('DELETE FROM biedingen WHERE id = ? AND email = ?');

$stmt -> bind_param('is', $id, $mail);
$stmt -> execute();

// number of deleted rows
if($stmt -> affected_rows > 0){
  ?>
<script> history.go(-1)</script>
  <?php
}
?>
