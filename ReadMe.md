## Introduction
PHPFormAPI is a Form API which provides an extremely fast + flexible way of creating responsive HTML5-Enabled Forms.

It was partly inspired by Drupal's form API, but it works on different principles.  
The phpformapi is easy to use and saves lots of coding and time.


It's created and developed by Anthony Ogundipe, CEO of [DHTMLExtreme](http://www.dhtmlextreme.net).

## Features
* It's lightweight (just 1 file).
* It should save you lots of work.
* It's easy to use (no need to be a hardcore coder).
* You can implement it in an existing project
* It supports Web apps written in modern HTML5, CSS3, JS, PHP and MySQL.
* Compatible with PHP5+
* It is very easy to extend and customize

## Objectives
* Be standalone and not too heavy, so the library can easily be incorporated into other projects. 
* The modifications required to make your webform compatible with the API is very minimal.
* Be SUPER easy to use, for beginner programmers too.
* Not more code than necessary.
* Forms can be created programatically


## Quick Start
* Download the [zip master](https://github.com/dhtml/phpformapi/archive/master.zip)
* Extract the zip master into your web directory
* Open the examples folder to check out the basic and advanced functionalities.


Simple Usage:

```
<?php
include "../../lib/phpformapi.php";

$form = new form(array(
	'name' => 'form1',
	'method' => 'post',
	)
);


$form->add_field('input', array(
'#class'=>'form-group',
'#label'=>'Email address',
'type'=>'email',
'class'=>'form-control',
'id'=>'exampleInputEmail1',
'placeholder'=>'Email',
));


$form->add_field('button', array(
'#value'=>'Submit',
'type'=>'submit',
'class'=>'btn btn-default',
));

print $form->render();

```


## Documents

For more information on how to use this api to create web applications, see:

* our [Wiki](https://github.com/dhtml/phpformapi/wiki) for much more.
=======
>>>>>>> origin/master

## Community
You can chat with us on facebook http://facebook.com/dhtml5 


## License

`phpformapi`'s code in this repo uses the MIT license, see our `LICENSE` file.
