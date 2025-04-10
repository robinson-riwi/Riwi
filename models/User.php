<?php

class User extends DB
{
    private function getAllUsers()
    {
        $sql = "SELECT * FROM users";
        $q = $this->connect()->prepare($sql);
        $q->execute();
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }
    protected function getFindUser($id)
    {
        $sql = "SELECT * FROM users where id =" .$id;
        $q = $this->connect()->prepare($sql);
        $q->execute();
        return $q->fetch(PDO::FETCH_ASSOC);
    }
}