<?php

class Work_with_file
{
    static public function read_file_in_binary_mode($path)
    {
        $file_or_path = '"'."$path".'"';
        $result = fopen($file_or_path,"rb") or die();
        return $result;
    }
    static public function read_file_in_text_mode($path)
    {
        $file_or_path = '"'."$path".'"';
        $result = fopen($file_or_path,"rt") or die();
        return $result;
    }
    static public function write_file_in_binary_mode($path)
    {

    }
    static public function write_file_in_text_mode($path)
    {

    }
    static public function close_file($path)
    {

    }
}