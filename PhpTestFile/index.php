<?php
setcookie('name', 'sasha', time() + 60, '/');

$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
$_SESSION["favanimal"] = "kyat";
$_SESSION["favcolor"] = "yellow";

echo '<pre>';
print_r($_SESSION);
var_dump($_COOKIE);
echo '</pre>';

?>