<?php

require_once "config.php";

class DB
{
    static private $spojeni;

    static public pripojit()
    {
        if($spojeni == null)
        {
            $spojeni = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        }

        return self::$spojeni;
    }
}
