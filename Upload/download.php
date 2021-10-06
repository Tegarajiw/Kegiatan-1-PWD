<?php 
$myDir = "c:/xampp/htdocs/pwd/Upload/";
$dir = opendir($myDir);
echo"Isi Folder (Klik link untuk download : <br>";
while($tmp = readdir($dir)){
    echo"<a href='$tmp' target='_blank'>$tmp</a><br>";
}
closedir($dir);
