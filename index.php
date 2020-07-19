<?php
require 'inc/config.php';
require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();



// GET route
$app->get(
    '/',
    function () {
       require_once("view/index.php");
    }
);
$app->get(
    '/materias',
    function () {
       require_once("view/materias.php");
    }
);
$app->get(
    '/noitesmaisdencas',
    function () {
       require_once("view/noitesmaisdencas.php");
    }
);
$app->get(
    '/card',
    function () {
       require_once("view/card.php");
    }
);
$app->get(
    '/historico',
    function () {
       require_once("view/historico.php");
    }
);
$app->get('/cardspararevisar',function (){

 
    $sql = new Sql();

    $result = $sql->select("SELECT  materias.materia, card.concluido, card.topico_estudado, card.descricao_estudado, revisar.revisar_atual, revisar.qtd_revisoes, materias.materia_foto from card
    inner join revisar on revisar.id_card = card.id 
    inner join materias on materias.id = revisar.id_materia order by revisar.revisar_atual");
        
    echo json_encode($result);

      
    }
);
$app->run();
