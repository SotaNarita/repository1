<?PHP
class Fruits{
    public $price;
    public function __construct($min, $max)
    {
     $this->price = mt_rand($min, $max);
    }
}
class Market{
    public function marketPrice($fruitsArray, $fruitsName){
	$priceArray=array();
	for ($i = 0; $i<15; $i++) {
	    $priceArray[] = $fruitsArray[$i]->price;
        }
        $sumPrice = array_sum($priceArray);
	echo $fruitsName . "の平均価格は" . round($sumPrice/count($fruitsArray)) . "円です<br />";
	echo $fruitsName . "の最高価格は" . max($priceArray) . "円です<br />";
        echo $fruitsName . "の最低価格は" . min($priceArray) . "円です<br />";
    }
}
for ($i = 0; $i<15; $i++) {
$peach[$i] = new Fruits(200, 300);
$strrowberry[$i] = new Fruits(400, 500);
}
$market = new Market;
$market->marketPrice($peach, "桃");
$market->marketPrice($strrowberry, "苺");
?>