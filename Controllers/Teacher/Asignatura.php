<?php


namespace Controller\Teacher;

require_once REPOSITORY . 'Teacher/TeacherRepository.php';

use Repository\Teacher\TeacherRepository;


class Asignatura
{

    protected $repo;

    public function __construct()
    {
        $this->repo = new TeacherRepository();
    }

    /**
     * @return TeacherRepository
     */
    public function save($nombre, $codigo, $id)
    {
        return $this->repo->crearAsignatura($nombre, $codigo, $id);
    }



}