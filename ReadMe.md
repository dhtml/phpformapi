## Introduction

PHPFormAPI is an extremely dynamic, extensible and fantastic form API for developing php web applications. 

It was partly inspired by Drupal's form API, but it works on different principles.  The php formapi is a standalone, easy to use form api that saves lots of coding and time.

It's created and developed by Anthony Ogundipe, CEO of [DHTMLExtreme](http://www.dhtmlextreme.net).

## Features
* It's lightweight (just 1 file).
* It should save you lotsa work.
* It's easy to use (no need to be a hardcore coder).
* You can implement it in an existing project
* It supports Web apps written in modern HTML5, CSS3, JS, PHP and MySQL.
* Compatible with PHP5+
* Excellent **front-end** and **backend** validation (without making use of javascript).
* It is very easy to extend and customize

## Objectives
* Be standalone and not too heavy, so the library can easily be incorporated into other projects. 
* Your forms can be generated any form builder, dreamweaver, FP or even drupal form api.
* The modifications required to make your webform compatible with the API is very minimal.
* Be SUPER easy to use, for beginning programmers too.
* Not more code than necessary.
* Forms can be created programatically
* Validation is taken care of automatically.
* You can still re-validate with simple functions.


## Quick Start
* Download the [zip master](https://github.com/dhtml/phpformapi/archive/master.zip)
* Extract the zip master into your web directory
* Open the examples folder to check out the basic and advanced functionalities.
* You can test all our [examples online](http://www.dhtmlframework.com/phpformapi)


Simple Usage:
You can view demo of [this example online](http://dhtmlframework.com/phpformapi/example05/index.php)

```
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
```


A more advanced example:
You can view demo of [this example online](http://dhtmlframework.com/phpformapi/example06/index.php)

```
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

echo phpformapi::getStr($form); 
?>
```


## Documents

For more information on how to use this api to create web applications, see:

* our [Website](http://dhtmlframework.com/phpformapi) for much more.
* our [Wiki](https://github.com/dhtml/phpformapi/wiki) for much more.

## Community

We use the [phpformapi group](https://groups.google.com/forum/#!forum/phpformapi) for issues that are being tracked here on GitHub.

You can chat with us on facebook http://facebook.com/dhtml5 

## License

`phpformapi`'s code in this repo uses the MIT license, see our `LICENSE` file.
