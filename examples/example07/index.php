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

$form=<<<end

<p>We are not using an external theme file this time.</p>

<form id="loginForm" name="loginForm" method="post">
  <p>User Name
    <input type="text" name="name" id="name" />
  </p>
  <p>
    <label>E-mail
      <input type="text" name="email" id="email" />
    </label>
  </p>
  <p>
    <input type="submit" value="Login" />
  </p>
</form>

end;

echo phpformapi::getStr($form,Array('name'=>'Anthony Ogundipe','email'=>'diltony@yahoo.com')); 
?>