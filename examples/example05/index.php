<?php
include "../../lib/phpformapi.php";

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

echo phpformapi::getStr($form); 
?>