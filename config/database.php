<?php
    
    // Database connection data define
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "");
    define("DB_HOST", "localhost");
    define("DB_NAME", "long12_415");


    
    $connect = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    
    // query get data from database
    function select($connect,$sql){
            
        $query = mysqli_query($connect,$sql);
            $res = mysqli_fetch_all($query,1);
            if($query){
                return $res;
            }else{
                return false;
            }
    }
    // update databese's data
    function update($connect,$sql){
        
            $query = mysqli_query($connect,$sql);
            $num = mysqli_affected_rows($connect);
            if($num > 0){
                return true;
            }else{
                return false;
            }
    }
    // insert data into database
    function insert($connect,$sql){
            $query = mysqli_query($connect,$sql);
            $num = mysqli_affected_rows($connect);
            if($num > 0){
                return true;
            }else{
                return false;
            }
    }
    // delete data
    function deleteF($connect,$sql){
        $query = mysqli_query($connect,$sql);
        $num = mysqli_affected_rows($connect);
        if($num > 0){
            return true;
        }else{
            return false;
        }
    }
    
    
    
	


?>
