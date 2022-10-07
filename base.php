<?php


class DB{
  private $dsn="mysql:host=localhost;charset=utf8;dbname=db_story";
  private $root='root';
  private $password='12345';
  private $table;
  private $pdo;

  public function __construct($table){
    $this->table=$table;
    $this->pdo=new PDO($this->dsn,$this->root,$this->password);
  }

  public function all(...$arg){
    $sql="select * from $this->table ";



    return $this->pdo->query($sql)->fetchAll();
  }
}

$db=new DB("user");
echo "<pre>";
print_r($db->all());
echo "</pre>";

$db2=new DB("stories");
echo "<pre>";
print_r($db2->all());
echo "</pre>";

?>