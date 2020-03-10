<?php

require_once "db.php";

// kontrola existence udaju v URL
if(isset($_GET["c"]) && isset($_GET["a"]))
{
    // predani dat z URL
    $controller = $_GET["c"];
    $akce = $_GET["a"];
}
else
{
    // defaultni chovani
    $controller = "stranky";
    $akce = "domu";
}

require_once "viewy/layout.php";
