<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Tutopro/routes.php';

require_once CONTROLLER . 'Teacher/registerTeacher.php';


use Controller\Teacher\registerTeacher;

/** @var type $data */
$data = json_decode($_POST['data'], true);

$obj = new registerTeacher();


$obj->save($data['nombres'], $data['apellidos'], $data['tipo_id'], $data['numero_id'], $data['email'], $data['telefono'], $data['password'], $data['rol']);







