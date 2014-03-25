<?php include "../../lib/phpformapi.php";?>
<html>
<head>
<title>Validation</title>
<link rel="stylesheet" href="validation.css">
</head>
<body>
<?php
//in case there are form errors, display them nicely here
$errors=phpformapi::getErrors('loginForm');
if($errors) {
echo '<div class="error_box" style="display: block;">';
echo $errors;
echo '</div>';
}

echo phpformapi::get("login.tpl.php"); 
?>
</body>
</html>