<?php
function getDBConnection(){
    try{
        $db = new PDO('mysql:host=localhost;dbname=penjualan_0054','root','');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }catch(PDOException $e){
        echo 'Connection failed: '.$e->getMessage();
    }
}
?>