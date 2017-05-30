<?php

class Work_with_file
{
    static public function read_file_in_binary_mode($path)
    {
        $result = fopen(__DIR__ . '/' . $path,"rb") or die("Ошибка! Не удалось открыть файл.");
        return $result;
    }
    static public function read_file_in_text_mode($path)
    {
        $result = fopen(__DIR__ . '/' . $path,"rt") or die("Ошибка! Не удалось открыть файл.");
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
        if($tmp_value = fopen(__DIR__ . '/' . $file,"r+b")){
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
        if($result = fopen(__DIR__ . '/'. $file,'a')){
            if (fwrite($result, $string)) {
                fclose($result);
            }
            else{
                fclose($result);
                die();
            }
        }
        else{
            die();
        }
    }
}