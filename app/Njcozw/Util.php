<?php

namespace App\Njcozw;


class Util
{
    public static function dd($data)
    {
        echo "<code>";
        echo "<pre>";
        die(print_r($data, true));
        echo "</pre>";
        echo "</code>";
    }

    public static function generate(int $val)
    {
        $chars = '0123456789abcdefghijklmnopqrstvwZABCDEFGHIJKLMNOPQRSTVUXWz';
        $str = '';

        for ($i = 0; $i < $val; $i++) {
            $index = rand(0, strlen($chars) - 1);
            $str .= $chars[$index];
        }

        return $str . date('mdyHm');
    }

    public static function log(string $data, string $location)
    {
        $date = date("Y-m-d H:i:s");
        $filename = date('Y_m_d') . '_logs';

        $logging_text = "$date Log: $data";

        $log = file_put_contents("./$location/$filename.txt", $logging_text . PHP_EOL, FILE_APPEND | LOCK_EX);

        return true;
    }
}
