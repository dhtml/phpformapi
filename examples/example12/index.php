<?php
//submit application
function phpformapi_submit_loginForm($values)  {
phpformapi::sendMessage("Your Form Was Submitted Successfully.");

/* Message Block is a used to post longer messages */
phpformapi::messageblock(); //begining of messageblock
  print "<h2>My form was submitted!</h2><p>These are the values we got:</p>";
  echo "<pre>";
  print_r($values);
  echo "</pre>";
  echo "<a href='index.php'>Click here to fill a fresh form.</a>";
phpformapi::end_messageblock(); //end of messageblock
//exit();
}

include "../../lib/phpformapi.php";
?>
<html>
<head>
<title>Validation</title>
<link rel="stylesheet" href="validation.css">
</head>
<body>
<?php
//retrieve all messages
$messages=phpformapi::getMessages('loginForm');

if($messages) {
echo '<div class="success_box">';
echo $messages;
echo '</div>';
}

echo phpformapi::get("login.tpl.php"); 
?>
</body>
</html>