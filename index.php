<?php
require_once("required/Modularisasi.php");
require_once("required/Database.php");
require_once("include/header.php");
require_once("include/Form.php");
$moduleName = strpos(@$_REQUEST["mod"], "/") ? str_split(@$_REQUEST["mod"], strpos(@$_REQUEST["mod"], "/"))[0] : @$_REQUEST['mod'];

$mod = [
    "home" => "view/home.php",
    "update" => "view/update.php",
    "about" => "view/about.php",
    "add" => "view/add.php",
    "delete" => "view/delete.php",
    "contact" => "view/contact.php",
];

$moduleLoader = new Modularisasi($mod);
$moduleLoader->load($moduleName);
require_once("include/footer.php");
