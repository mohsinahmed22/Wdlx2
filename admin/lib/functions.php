
<?php
include '../config/config.php';

/**
  * User: Mohsin
 * Date: 2/8/2017
 * Time: 10:51 AM
 */
// Check Query
function check_query($check_query){
    global $connection;
    if(!$check_query){
         echo  die("Query Failed: " . mysqli_error($connection, $check_query));
    }
}

// Select All Query
function _query($query){
    global $connection;

    $result = mysqli_query($connection, $query);
    check_query($result);

    if(is_array($result)):
        return  mysqli_fetch_assoc($result);
    else:
        return $result;
    endif;
}

// Check Admin
function _isAdmin($user){
    if($user !== "admin"){
        return false;
    }else{
        return true;
    }

}


// Header Sent
function redirect($location){
    return header("Location:" . $location);
}


// Register Users
function register_users($username, $password, $email){


}



// Login Users
function login_users($username, $password){


}