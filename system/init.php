<?php
session_start();
/**
 * Скрипт инициализации. Подключение "ядра" системы.
 */
global $DBi;
$arSettings = (array)include(__DIR__ . "/config.php");
// отображение ошибок
ini_set("display_errors", (int) @$arSettings["display_errors"]);
$arSettingsDB = $arSettings["database"];
$DBi = new mysqli($arSettingsDB["host"], $arSettingsDB["user"], $arSettingsDB["password"], $arSettingsDB["database"]);
if ($DBi->connect_errno) {
	die("Ошибка соединения: %s\n" . $DBi->connect_error);
}
$DBi->query("SET NAMES 'utf8'");
$DBi->query("SET SESSION group_concat_max_len = 10000000;");
/**
 * Функция автоматического подключения классов
 */
include $_SERVER["DOCUMENT_ROOT"] . "/system/models/SQL.php";
include $_SERVER["DOCUMENT_ROOT"] . "/system/models/GalleryPhoto.php";
include $_SERVER["DOCUMENT_ROOT"] . "/system/models/Site.php";
include $_SERVER["DOCUMENT_ROOT"] . "/system/models/AJAX.php";
include $_SERVER["DOCUMENT_ROOT"] . "/system/models/Article.php";
include $_SERVER["DOCUMENT_ROOT"] . "/system/models/Lead.php";
spl_autoload_register(function ($class_name) {
	include $_SERVER["DOCUMENT_ROOT"] . "/system/models/" . str_replace("\\", "/", $class_name) . '.php';
});
