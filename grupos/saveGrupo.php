<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Tutopro/routes.php';

require_once CONTROLLER . 'Teacher/Grupo.php';


use Controller\Teacher\Grupo;

/** @var type $data */
$data = json_decode($_POST['data'], true);

$obj = new Grupo();


$obj->save($data['nombre'], $data['codigo'], $data['periodo'], $data['idTeacher'], $data['asignatura']);









