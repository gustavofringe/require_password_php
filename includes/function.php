<?php
define('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME'])));
function debug($variable){
	echo '<pre>' . print_r($variable, true) . '</pre>';
}