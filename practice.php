<?PHP
class Fruites{
    public $price;

    public function __construct($min, $max)
    {
     $this->price = mt_rand($min, $max);
    }
}

class Momo extends Fruites{

    public function __construct()
    {
     parent::__construct(200, 300);
    }
}

class Ichigo extends Fruites{

    public function __construct()
    {
     parent::__construct(400, 500);
    }
}

class Market{
    public $momo = array();
    public $ichigo = array();

    public function __construct()
    {
     for($i = 0; $i<15; $i++)
     {
      $this->momo[$i] = new Momo();
      $this->ichigo[$i] = new Ichigo();
     }
    }
    public function avg($arrayFruites)
    {
     $sumPrice = 0;
     for($j = 0; $j<15; $j++)
     {
      $sumPrice+=$arrayFruites[$j]->price;
     }
      $avg = round($sumPrice/15);
     if ($arrayFruites==$this->momo)
     {
      echo "桃の平均価格は" . $avg . "円です<br />";
     }else if ($arrayFruites==$this->ichigo)
     {
      echo "苺の平均価格は" . $avg . "円です<br />";
     }
    }
    public function maxmin($arrayFruites)
    {
     $pricearray = array();
      for($k = 0; $k<15; $k++)
      {
       $pricearray[] = $arrayFruites[$k]->price;
      }
     if ($arrayFruites==$this->momo)
      {
     echo "桃の最高値は" . max($pricearray) . "円です<br />";
     echo "桃の最低値は" . min($pricearray) . "円です<br />";
     }else{
     echo "苺の最高値は" . max($pricearray) . "円です<br />";
     echo "苺の最低値は" . min($pricearray) . "円です<br />";

     }
    }
}

$market = new Market();
$market->avg($market->momo);
$market->avg($market->ichigo);
$market->maxmin($market->momo);
$market->maxmin($market->ichigo);

?>