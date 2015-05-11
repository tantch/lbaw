<?php
  include_once('../../config/init.php');

  session_destroy();
  $USERID=null;
  unset($_SESSION['user_id']);
  header('Location: ../');
?>
