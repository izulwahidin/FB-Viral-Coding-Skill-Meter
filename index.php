<?php
require_once(__DIR__ . "/utils.php");
@$_GET["name"] ?: die(<<<name
Harap input nama kamu!
<br>
Contoh: <b>{$_SERVER['SERVER_NAME']}/[NAMA_KAMU]</b>
name);

$name = $_GET["name"];
$levelData = json_decode(file_get_contents("assets/levels.json"));
$gifData = json_decode(file_get_contents("assets/gifs.json"));

$data = getConsistentIndex($_GET["name"], $levelData);
$gif = getConsistentIndex($_GET["name"], $gifData);


include(__DIR__ . "/render.php");
