<?php

class Connection
{

    /**@var mysqli $conection */
    protected $connection;
    /**@var mysqli_stmt $stmt */
    protected $stmt;
    private $host;
    private $db;
    private $user;
    private $password;

    public function __construct()
    {
        require_once INFRASTRUCTURE . 'config.php';
        $this->host = HOST;
        $this->db = DB;
        $this->user = USER;
        $this->password = PASSWORD;
    }

    protected function connect()
    {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->db);
        if ($this->connection->connect_error) {
            die("Error al conectarse a MySQL: (" . $this->connection->connect_errno . ") -> " . $this->connection->connect_error);
        }
    }

    protected function close()
    {
        $this->connection->close();
    }

    protected function prepare($sql, $types, $params)
    {
        $stmt = $this->connection->prepare($sql);        
        if ($stmt) {
            $stmt->bind_param($types, ...$params);
            $this->stmt = $stmt;
            return true;
        }
        error_log('Error al preparar: ' . $stmt->error);
        return false;
    }

    public function execute($sql, $types = '', $params = [], $returning = false)
    {
        $this->connect();
        $this->prepare($sql, $types, $params);
        if ($this->stmt) {
            if ($this->stmt->execute()) {
                $this->close();
                return $returning ? $this->stmt->insert_id : true;
            }
            error_log('error al ejecutar: '. $this->stmt->error);
            throw new Exception($this->stmt->error);
        }
        $this->close();
        error_log('error al ejecutar');
        return false;
    }

    protected function getResult()
    {
        $result = [];
        $result_query = $this->stmt->get_result();
        while ($row = $result_query->fetch_assoc()) {
            $result[] = $row;
        }
        return $result;
    }

    public function query($sql, $types = '', $params = [])
    {
        $result = [];
        $this->connect();
        $this->prepare($sql, $types, $params);
        if ($this->stmt) {
            $this->stmt->execute();
            $result = $this->getResult();
        }
        $this->close();
        return $result;
    }

}

