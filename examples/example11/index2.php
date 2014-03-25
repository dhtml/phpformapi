<?php
//submit application
function phpformapi_submit_loginForm($values)  {
phpformapi::sendMessage("Your Form Was Submitted Successfully.");
phpformapi::reset();
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
//error messages
$errors=phpformapi::getErrors('loginForm');

if($errors) {
echo '<div class="error_box" style="display: block;">';
echo $errors;
echo '</div>';
}


//success messages
$messages=phpformapi::getMessages('loginForm');

if($messages) {
echo '<div class="success_box">';
echo $messages;
echo '</div>';
}

echo phpformapi::get("login2.tpl.php"); 
?>
</body>
</html>