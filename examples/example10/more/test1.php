<?php 
function phpformapi_validate_loginForm($validation,$vars)  {

//loop through all the field and validate each one if necessary
foreach($validation as $field=>$data) {
$value=$vars[$field];

//to pass this validation, you must use home as password
if($field=="pass"&&$value!="home") {
phpformapi::setFormError("Your password is not correct");
phpformapi::$errorFields[]=$field;
}

}

}


function phpformapi_submit_loginForm($values)  {
  print "<h2>My form was submitted!</h2><p>These are the values we got:</p>";
  echo "<pre>";
  print_r($values);
  echo "</pre>";
  echo "<a href='index.php'>Click here to fill a fresh form.</a>";
  exit();
}


include "../../../lib/phpformapi.php";

?>

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