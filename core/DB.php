<?php

class DB
{
    public function connect(){
        try {
                $pdo = new PDO("mysql:host=localhost:3306;dbname=riwi", "root", "password");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
        }catch (Exception $e){

        }
    }
}