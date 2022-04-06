<?php
/* ------ PHP Data Types ------ */

/**
 * String       series of characters surrounded by qoutes
 * Integer      whole numbers
 * Float        Decimal numbers
 * Boolean      true or false
 * Array        Special variable, which can hold more than one value
 * Object       A class
 * Null         Empty variable
 * Resource     Special variable that holds a resource
 */


/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/
$name = 'Collins';
$age = 31;
$has_kids = true;
$cash_on_hand = 20.75;

// echo $name;
// echo $age;
// var_dump($has_kids);
// print_r($cash_on_hand);

// echo "${name} is ${age} years old";

$x = '5' + '5';

// var_dump($x);

// echo 10 - 5;

// echo 5 * 6;

// echo 10 / 2;

// echo 10 % 3;

// declaring constant
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;
