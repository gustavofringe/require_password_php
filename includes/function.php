<?php
define('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME'])));
function dd($variable){
	echo '<pre>' . print_r($variable, true) . '</pre>';
}