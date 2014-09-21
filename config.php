<?php
    define('BASE_URL', "http://".$_SERVER["HTTP_HOST"]."/".mb_split("/", $_SERVER["REQUEST_URI"])[1]."/");// http://localhost/ibiponi/
    define('RELATIVE_BASE_URL', mb_split("/", $_SERVER["REQUEST_URI"])[1]."/");// ibiponi/
?>
