<?php
/**
 * Created by PhpStorm.
 * User: yushisusu
 * Date: 2018/5/20
 * Time: 13:31
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Created by PhpStorm.
 * User: yushisusu
 * Date: 2018/5/15
 * Time: 23:33
 */

session_start();



$page=$_GET["page"];

$page=$page+1;

$p=strval($page);

echo $p;

