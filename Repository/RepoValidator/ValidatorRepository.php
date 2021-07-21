<?php


namespace Repository\Validator;

require_once INFRASTRUCTURE . 'BaseRepository.php';
require_once PROJECT . 'Helpers/Response.php';

use BaseRepository;
use Helpers\Response;


class ValidatorRepository extends BaseRepository
{

    public function getCodigo($codigo){
        $sql = 'select * from grupo g where g.codigo = ? ';

        return $this->query($sql, 's', [$codigo]);
    }


}