<?php
  print "<h2>My form was submitted!</h2><p>These are the values we got:</p>";
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
  echo "<a href='index.php'>Click here to fill a fresh form.</a>";
  exit();
?>