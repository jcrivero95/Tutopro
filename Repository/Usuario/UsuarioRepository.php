<?php


namespace Repository\Usuario;

require_once INFRASTRUCTURE . 'BaseRepository.php';
require_once PROJECT . 'Helpers/Response.php';

use BaseRepository;
use Helpers\Response;


class UsuarioRepository extends BaseRepository
{
    public function getUser($email){
        $sql = 'select * from usuarios u where u.email = ? ';

        return $this->query($sql, 's', [$email]);
    }

}