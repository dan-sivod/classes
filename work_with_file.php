<?php

class Work_with_file
{
    static public function read_file_in_binary_mode($path)
    {
        $file_or_path = '"'."$path".'"';
        $result = fopen($file_or_path,"rb") or die("Ошибка! Не удалось открыть файл.");
        return $result;
    }
    static public function read_file_in_text_mode($path)
    {
        $file_or_path = '"'."$path".'"';
        $result = fopen($file_or_path,"rt") or die("Ошибка! Не удалось открыть файл.");
        return $result;
    }
    static public function close_file($path)
    {
        if(!fclose($path)){
            die("Ошибка! Не удалось закрыть файл.");
        }
    }
    public static function clearing_file($file)
    {
        $name_file = '"' . "$file" . '"';
        if($tmp_value = fopen($name_file, "r+b")){
            ftruncate($tmp_value, 0);
            fseek($tmp_value, 0, SEEK_SET);
            fclose($tmp_value);
        }
        else{
            die("Ошибка! Не удалось открыть файл.");
        }
    }
    public static function write_in_file($file,$string)
    {
        if(!fwrite($file, $string)){
            die("Ошибка! Не удалось произвести запись в файл.");
        }
    }
}