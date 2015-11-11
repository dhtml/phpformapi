<?php
require '../lib/phpformapi.php';


$form = new form(array(
	'name' => 'form1',
	)
);

$form2 = new form(array(
	'name' => 'form1',
	)
);


$form->add_field('input', array(
'#lblclass'=>'checkbox-inline',
'#label'=>"1",
'type'=>'checkbox',
'id'=>'inlineCheckbox1',
'value'=>'option1',
));


$form->add_field('input', array(
'#lblclass'=>'checkbox-inline',
'#label'=>"2",
'type'=>'checkbox',
'id'=>'inlineCheckbox2',
'value'=>'option2',
));


$form->add_field('input', array(
'#lblclass'=>'checkbox-inline',
'#label'=>"3",
'type'=>'checkbox',
'id'=>'inlineCheckbox3',
'value'=>'option3',
));

$form2->add_field('input', array(
'#lblclass'=>'radio-inline',
'#label'=>"1",
'type'=>'radio',
'name'=>'inlineRadioOptions',
'id'=>'inlineRadio1',
'value'=>'option1',
));

$form2->add_field('input', array(
'#lblclass'=>'radio-inline',
'#label'=>"2",
'type'=>'radio',
'name'=>'inlineRadioOptions',
'id'=>'inlineRadio2',
'value'=>'option2',
));

$form2->add_field('input', array(
'#lblclass'=>'radio-inline',
'#label'=>"3",
'type'=>'radio',
'name'=>'inlineRadioOptions',
'id'=>'inlineRadio3',
'value'=>'option3',
));

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Example 6</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

  </head>
  <body>
  <div class="container">
  <h1>Example 6</h1>
  <?php print $form->render(); ?>
  <?php print $form2->render(); ?>
  </div>
  </body>
  </html>
