<?php

class Database
{
    public static $db_connect;

    public static function connection($host, $user, $password, $db_name)
    {
        self::$db_connect = mysqli_connect($host, $user, $password, $db_name);
        if(!self::$db_connect){
            echo 'Ошибка!' . PHP_EOL;
            echo 'Код ошибки: ' . mysqli_connect_errno() . PHP_EOL;
            echo 'Текст ошибки: ' . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        echo 'Соединение установлено'. PHP_EOL;
    }
    public static function close()
    {
        mysqli_close(self::$db_connect);
    }
    public static function query($user_query)
    {
        $result_query = mysqli_query(self::$db_connect,$user_query);
        if(!$result_query){
            echo'Ошибка!';
        }
    }
}