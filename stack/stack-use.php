<?php

require 'Stack.php';

$stack = new Stack(5);

$stack->push('hello');
$stack->push('world');
$stack->push('im');
$stack->push('alireza');
$stack->push('vahdani');

$stack->push('this push return overflow');

$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();

echo '<pre>';
var_dump($stack->getItems());
echo '</pre>';
