<?php
require_once(__DIR__ . "/utils.php");
@$_GET["name"] ?: die(<<<name
Harap input nama kamu!
<br>
Contoh: <b>{$_SERVER['SERVER_NAME']}/[NAMA_KAMU]</b>
name);

$name = strtolower(trim($_GET["name"]));
$md5name = md5($name);
$levelData = json_decode(file_get_contents("assets/levels.json"));
$gifData = json_decode(file_get_contents("assets/gifs.json"));

$data = getConsistentIndex($md5name, $levelData);
$gif = getConsistentIndex($md5name, $gifData);


include(__DIR__ . "/render.php");
