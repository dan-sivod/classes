<?php

class Object_db
{
    static public $host = 'localhost';
    static public $user = 'root';
    static public $password = '';
    static public $db_name = 'db_one';

    static public function settings()
    {
        return $settings = self::$host . "," . self::$user . "," . self::$password . "," . self::$db_name;
    }

    static public function query($user_query)
    {
        $mysqli = new mysqli(self::settings());
        if ($mysqli->connect_errno) {
            die();
        }
        $result = $mysqli->query($user_query);
        
    }
}