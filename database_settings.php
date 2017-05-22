<?php

class Database_settings
{
    public static $host = 'localhost';
    public static $user = 'root';
    public static $password = '';
    public static $db_name = 'db_one';
    public static function settings
    {
        return $settings = self::$host . "," . self::$user . "," . self::$password . "," . self::$db_name;
    }
}