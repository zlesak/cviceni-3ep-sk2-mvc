<?php

class PrispevkyController
{
    public function pridani()
    {
        require_once "viewy/prispevky/pridani.php";
    }

    public function pridat()
    {
        $nadpis = trim($_POST["nadpis"]);
        $obsah = trim($_POST["obsah"]);

        $prispevek = Prispevek::ulozit($nadpis, $obsah);

        if($prispevek)
        {
            $_GET["id"] = $prispevek->id;
            return spustit("prispevky", "detail");
        }
        else
            return spustit("prispevky", "chyba");
    }

    public function detail()
    {
        $id = $_GET["id"];
        $prispevek = Prispevek::nacist($id);

        require_once "viewy/prispevky/detail.php";
    }

    public function chyba()
    {
        require_once "viewy/prispevky/chyba.php";
    }

    public function prehled()
    {
        $prispevky = Prispevek::nacistVsechny();

        require_once "viewy/prispevky/prehled.php";
    }
    
    public function upravitGetData()
    {
        $id = $_GET["id"];
        $data = Prispevek::upravitData($id);
        require_once "viewy/prispevky/upravit.php";
    }

    public function upravit(){
        $nadpis = trim($_POST["nadpis"]);
        $obsah = trim($_POST["obsah"]);
        $id = $_GET["id"];
        $upraveno = Prispevek::upravit($id, $nadpis, $obsah);
        header("Location: ./index.php?c=prispevky&a=prehled");        
    }

    public function smazat(){
        $id = $_GET["id"];
        $prispevky = Prispevek::smazat($id);
        header("Location: ./index.php?c=prispevky&a=prehled");
    }

}
