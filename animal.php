<?php
class Animal
{
  public function bark()
  {
    echo 'Yeah, it’s barking.' . PHP_EOL;
    echo '------1------' . PHP_EOL;
  }
}

class Dog extends Animal
{
  public $name;
  public $age;

  public function __construct($name, $age=1)
  {
    $this->name = $name;
    $this->age = $age;
    echo '------2------' . PHP_EOL;
  }
}

class MechaDog extends Dog
{
  private $data;

  public function __construct($name, $age=1)
  {
    parent::__construct($name);
    $this->data = array(
      'apache' => 'apache',
      'bsd' => 'mit',
      'chef' => 'apache'
    );
    echo '------3------' . PHP_EOL;
  }

  public function proc($arg)
  {
    $path = explode("/", explode(" ", $arg)[0]);//この変数の内容が「$path = array ([0] => "GET")」になっているが、本当は「$path = array ([0] =>"GET" [1] => "bsd")」となるべき
    echo var_dump($path) . PHP_EOL;
    array_shift($path);
    echo var_dump($path) . PHP_EOL;
    if( is_null($path) ) {
      $keys = array();
      while (list($key, $val) = each($this->data)) {
        array_push($keys, $key);
      }
      var_dump($keys);
    }
    else if(count($path) == 2){
      $this->data[$path[0]] = $path[1];
      echo $path[1] . PHP_EOL;
    }
    else {
      echo $path[0] . "=>" . $this->data[$path[0]] . PHP_EOL;
    }
    echo var_dump($path) . PHP_EOL;
    echo '------4------' . PHP_EOL;
  }
}

$mdog = new MechaDog('tom');
$mdog->bark();
echo $mdog->name . PHP_EOL;
echo $mdog->age . PHP_EOL;
$mdog->proc("GET /bsd HTTP/1.1");