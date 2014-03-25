<?php
//submit application
function phpformapi_submit_loginForm($values)  {
phpformapi::sendMessage("Your Form Was Submitted Successfully.");
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