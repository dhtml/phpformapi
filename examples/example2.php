<?php
require '../lib/phpformapi.php';


$form = new form(array(
	'name' => 'form1',
	'class' => 'form-inline',
	)
);


$form->add_field('input', array(
'#class'=>'form-group',
'#label'=>'Name',
'type'=>'text',
'class'=>'form-control',
'id'=>'exampleInputName2',
'placeholder'=>'Jane Doe',
));


$form->add_field('input', array(
'#class'=>'form-group',
'#label'=>'Email address',
'type'=>'email',
'class'=>'form-control',
'id'=>'exampleInputEmail1',
'placeholder'=>'jane.doe@example.com',
));


$form->add_field('button', array(
'#value'=>'Send invitation',
'type'=>'submit',
'class'=>'btn btn-default',
));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Example 2</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

  </head>
  <body>
  <div class="container">
  <h1>Example 2</h1>
  <?php print $form->render(); ?>
  </div>
  </body>
  </html>
