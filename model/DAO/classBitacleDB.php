<?php
include("dbConnector.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classBitacleDB
 *
 * @author Mazu
 */
class BitacleDB{
   function fetchValidateUser($user,$password){
        $sql = "SELECT * FROM usuario WHERE username = '".$user."'";
        $con = new DB();
        $result = $con->query($sql);
        $ok = false;
        if ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        
            if ($user === $row['username']) {
                if (md5($password) === $row['password']) {
                    $ok = true;
                }else{
                    $ok = false;
                }
            }else{
                $ok = false;
            }
        }   
        return $ok;
    } 
}
