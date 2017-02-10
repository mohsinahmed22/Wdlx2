<?php
include '../lib/functions.php';
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 2/9/2017
 * Time: 11:40 AM
 */
$_SESSION['username'] = "";
$_SESSION['users_password'] ="";
$_SESSION['users_firstname'] = "";
$_SESSION['users_lastname'] = "";
$_SESSION['users_email'] = "";
$_SESSION['users_role'] ="";
$_SESSION['status'] = "";

redirect("login.php");