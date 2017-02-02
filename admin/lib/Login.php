<?php

/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 2/2/2017
 * Time: 2:31 PM
 */
class Login
{
    protected $_db;
    protected $_users;
    protected $_username;
    protected $_user_password;
    protected $_user_role;
    protected $_user_status;



    public function __construct($db, $username, $password)
    {
        $this->_db = new $db;
        $this->_username = $this->_db->mysqli_real_escape_string($username);
        $this->_user_password = $this->_db->mysqli_real_escape_string($password);
    }

    // Check Login
    /**
     * User Login Check
     */
    public function login(){
            $query = "SELECT * FROM cms_users WHERE username = '{$this-.$this->_username}' AND users_password = '{$this->_user_password}'";
            $this->_db->;

    }


        /**
         * User Authentication
         * @param $arr
         */
    public function select_user($arr){
        while($row = mysqli_fetch_assoc($arr)):


            endwhile;



    }

}