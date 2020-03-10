<?php

require_once "config.php";

class DB
{
    static private $spojeni;

    static public function pripojit()
    {
        if(self::$spojeni == null)
        {
            self::$spojeni = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        }

        return self::$spojeni;
    }
}
