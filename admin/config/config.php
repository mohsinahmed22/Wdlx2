<?php
/**
 * User: Mohsin
 * Date: 1/31/2017
 * Time: 5:35 PM
 */

define("DB_HOST", "localhost");
define("DB_DATABASE", "wordlixcms");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");

$connection = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(!$connection){
    die("Connection Failed:" . mysqli_error_list());
}