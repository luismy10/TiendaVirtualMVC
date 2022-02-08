<?php

define("BASE_URL", !empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS']) ? 'https://' . $_SERVER['HTTP_HOST'] : 'http://' . $_SERVER['HTTP_HOST']);

const LIBS = "Libraries/";
const VIEWS = "Views/";

//Zona Horaria
date_default_timezone_set('America/Lima');

// Credenciales
const DB_HOST = "localhost";
const DB_PORT = "1433";
const DB_NAME = "SysSoftIntegra";
const DB_USER = "sa";
const DB_PASSWORD = "123456";
const DB_CHARSET = "charset=utf8";

//Delimitador decimal y millar
const SPD = ".";
const SPM = ",";

//Simbolo de monedas de
const SMONEY = 'S/ ';
