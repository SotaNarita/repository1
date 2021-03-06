<?php
class Animal
{
  public function bark()
  {
    echo 'Yeah, it’s barking.<br/>';
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
  }

  public function proc($arg)
  {
    $prepath = str_replace (" /", "/", $arg);
    $path = explode("/", explode(" ", $prepath)[0]);
    array_shift($path);
    if( is_null($path) ){
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
    else{
      echo $path[0] . "=>" . $this->data[$path[0]] . "<br/>";
    }
  }
}

$mdog = new MechaDog('tom');
$mdog->bark();
echo $mdog->name . "<br/>";
echo $mdog->age . "<br/>";
$mdog->proc("GET /bsd HTTP/1.1");