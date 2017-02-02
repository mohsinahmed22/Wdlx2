<?php include '../lib/Database.php'; ?>
<?php include '../lib/Login.php'; ?>
<?php session_start(); ?>

<?php


if(isset($_POST['login'])){
    $username = $_POST['username'];
    $users_password = $_POST['users_password'];
    $db = new Database();
    $user = new Login($db, $username,$users_password);
    if($username = $user->login()){

    }




}
?>
