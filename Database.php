<?php 
class Database{
  
  private $connection;
  private $statement;

  function __construct ($username = 'root', $password = '')
  {
    $config = require 'dbconfig.php';
    $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['database']};charset={$config['charset']}";
    $this->connection = new PDO($dsn, $username, $password);
    $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  }

  public function prepare($query, $params = []){

    $this->statement = $this->connection->prepare($query);

    $this->statement->execute($params);

    return $this;
  }

  public function fetch(){
    return $this->statement->fetch();
  }
  public function fetchAll(){
    return $this->statement->fetchAll();
  }
}




?>