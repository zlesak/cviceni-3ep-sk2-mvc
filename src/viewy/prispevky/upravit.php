<?php
echo"
<h1>Upravit příspěvek</h1>
<form action='index.php?c=prispevky&a=upravit' method='POST'>
    <input type='text' name='nadpis' value='$nadpis'><br />
    <textarea name='obsah' value='$obsah></textarea><br />
    <input type='hidden' value='$id'>
    <input type='submit' value='Upravit příspěvek' />
</form>
";