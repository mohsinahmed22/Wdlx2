<?php include '../lib/functions.php'; ?>
<?php session_start(); ?>

<?php
// Login Process
if(isset($_POST['login'])){
    $username = trim(mysqli_real_escape_string($connection, $_POST['username']));
    $users_password = trim(mysqli_real_escape_string($connection, $_POST['users_password']));

    // Password Hashed
       $users_password = password_verify($users_password, PASSWORD_BCRYPT);

    //  login_users($username, $users_password);
        $select_user = _query("SELECT * FROM cms_users WHERE username = '{$username}' AND users_password = '{$users_password}'");
        if($select_user) {
                $_SESSION['username'] = $select_user['username'];
                $_SESSION['users_password'] = $select_user['users_password'];
                $_SESSION['users_firstname'] = $select_user['users_firstname'];
                $_SESSION['users_lastname'] = $select_user['users_lastname'];
                $_SESSION['users_email'] = $select_user['users_email'];
                $_SESSION['users_role'] = $select_user['users_role'];
                $_SESSION['status'] = $select_user['users_status'];

                redirect("../index.php");
        }
        else{
            redirect("login.php?error=" . urlencode('Invalid Username 0r Password'));
        }
}

// Registeration Process
if(isset($_POST['register'])){
    $username = trim(mysqli_real_escape_string($connection, $_POST['username']));
    $users_password = trim(mysqli_real_escape_string($connection, $_POST['users_password']));
    $users_email = trim(mysqli_real_escape_string($connection, $_POST['users_email']));

    $users_password_hashed = password_hash($users_password,PASSWORD_BCRYPT, ['cost' => 10]);

    $user_registration =  _query("INSERT INTO cms_users (username, users_password, users_email, users_role, users_status)
                                  VALUES ('{$username}', '{$users_password_hashed}', '{$users_email}', 'subscriber', 0) ");

    redirect("login.php?success=" . urlencode('User successfully created.'));
}
?>
