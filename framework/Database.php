<?php
class Database
{
    private $connection;
    public function __construct()
    {
        // Si está corriendo PHP en Docker, usa 'postgres', si usas laravel Herd desde tu pc, usa 'localhost'
        $host = getenv('DOCKER_ENV') ? 'postgres' : 'localhost';
        $port = '5432';
        $dbname = 'ATW';
        $user = 'espe';
        $password = 'espe';
        
        $dsn = "pgsql:host={$host};port={$port};dbname={$dbname}";
        $this->connection = new PDO($dsn, $user, $password);
    }
    public function query($sql)
    {
        return $this->connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}
