<?php include '../config/config.php'; ?>
<?php

/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 1/31/2017
 * Time: 1:33 PM
 */
class Database
{
    // Variable Assigning
    public $username;
    public $password;
    public $db;
    public $host;



    // Mysqli Link
    public $link;


    // Error
    public $error;


    // Constructor
    public function __construct()
    {
        $this->username = DB_USERNAME;
        $this->password = DB_PASSWORD;
        $this->db = DB_DATABASE;
        $this->host = DB_HOST;


        $this->db_connect();
    }

    // DB Connection
    private function db_connect(){

        $this->link = mysqli_connect($this->host,$this->username, $this->password,$this->db);
        if(!$this->link):
            echo "Query Faild:" . mysqli_error($this->link);
        endif;
    }


    //Insert Query
    public function insert($query){
        $insert_query = mysqli_query($this->link, $query);
        if(!$insert_query){
            echo "Query Failed: " . mysqli_error($insert_query) . " Line:" .  __LINE__ ;
        }
        return $insert_query;
    }

    //Insert Query
    public function delete($query){
        $delete_query = mysqli_query($this->link, $query);
        if(!$delete_query){
            echo "Query Failed: " . mysqli_error($delete_query) . " Line:" .  __LINE__ ;

        }
        return $delete_query;
    }
    //Insert Query
    public function select($query){
        $select_query = mysqli_query($this->link, $query);
        if(!$select_query){
            echo "Query Failed: " . mysqli_error( $select_query) . " Line:" .  __LINE__ ;
        }
        return $select_query;
    }
    //Insert Query
    public function update($query){
        $update_query = mysqli_query($this->link, $query);
        if(!$update_query){
            echo "Query Failed: " . mysqli_error($update_query) . " Line:" .  __LINE__ ;
        }
        return $update_query;

    }

}