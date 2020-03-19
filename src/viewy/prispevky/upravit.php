<?php
$data = json_decode($data, true);
echo"
<h1>Upravit příspěvek</h1>
<form action='index.php?c=prispevky&a=upravit&id=".$data["id"]."' method='POST'>
    <input type='text' name='nadpis' value='".$data["nadpis"]."'><br />
    <textarea name='obsah'>".$data["obsah"]."</textarea><br />
    <input type='submit' value='Upravit příspěvek' />
</form>";