<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Tutopro/routes.php';

require_once CONTROLLER . 'Teacher/Asignatura.php';


use Controller\Teacher\Asignatura;

/** @var type $data */
$data = json_decode($_POST['data'], true);

$obj = new Asignatura();


$obj->save($data['nombre'], $data['codigo'], $data['idTeacher']);









