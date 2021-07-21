<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Tutopro/routes.php';

require_once CONTROLLER . 'Students/studentsController.php';


use Controller\Students\studentsController;

/** @var type $data */
$data = json_decode($_POST['data'], true);

$obj = new studentsController();


$obj->martricular($data['idGrupo'], $data['idStudent']);







