<?php
$_SERVER;
$string = serialize($_SERVER);
echo $string;
$_SERVER = unserialize($string);

echo "<pre>";
print_r($_SERVER);
echo "</pre>";