<?php
$variable = 211;

echo var_dump(isset($variable))."<br>";
unset($variable);
echo var_dump(isset($variable))."<br>";

const CONSTANT = 220;
echo CONSTANT."<br>";
var_dump(defined("CONSTANT"));



