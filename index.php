<?php 
require_once $_SERVER["DOCUMENT_ROOT"]."/crudPadrao/vendor/autoload.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/crudPadrao/class/Twig.class.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/crudPadrao/class/db.class.php";

//instancia banco para commita
$DB           = new DB;
$conectaBanco = $DB->conectaMysql(); 

//instancia twig para renderizar
$twig  = Twig::obterTwig();

$dadosTemplate = [];

//incluir arquivo para salvar dados e editar e exlucir do crud
include_once $_SERVER['DOCUMENT_ROOT']."/crudPadrao/crud.php";

//seta dados para renderizar index.twig
$dadosTemplate['titulo']      = "Cadastro de Filmes";
$dadosTemplate['caminhoRaiz'] = "/crudPadrao";
$dadosTemplate['microtime']   = microtime();

echo $twig->render("index.twig", $dadosTemplate);

?>