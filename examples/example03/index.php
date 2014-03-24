<?php
include "../../lib/phpformapi.php";

function phpformapi_submit_loginForm($values)  {
  print "<h2>My form was submitted!</h2><p>These are the values we got:</p>";
  echo "<pre>";
  print_r($values);
  echo "</pre>";
  echo "<a href='index.php'>Click here to fill a fresh form.</a>";
  exit();
}

echo phpformapi::get("login.tpl.php"); 
?>