<?php


require_once INFRASTRUCTURE . 'Connection.php';

class BaseRepository
{
    /**@var Connection $connection*/
    protected $connection;

    public function __construct()
    {
        $this->connection = new Connection();
    }

    protected function getConnection()
    {
        return $this->connection;
    }

    protected function query($sql, $types = '', $params =[])
    {
        return $this->connection->query($sql, $types, $params);
    }

    protected function execute($sql, $types = '', $params =[], $returning = false)
    {
        return $this->connection->execute($sql, $types, $params, $returning);
    }

}
