<html>
<head>
	<title>Car</title>
	<style>
		div{
			padding: 10px;
			margin: 10px auto 10px auto;
			background-color: lightgrey;
			border: 1px dashed grey;
			width: 200px;
		}
	</style>
</head>
<body>
<?
class Car
{
	public $price;
	public $speed;
	public $fuel;
	public $mileage;
	public $tax = 0.12;
	public function Display_all()
	{
		echo '<div>Price: &#36;' . $this->price . '<br>Speed: ' . $this->speed . 'mph<br>Fuel: ' . $this->fuel . '<br>Mileage: ' . $this->mileage . 'mpg<br>Tax: ' . ($this->tax * 100) . '&#37;</div>';
	}
	public function __construct($inputprice,$inputspeed,$inputfuel,$inputmileage)
	{
		$this->price = $inputprice;
		$this->speed = $inputspeed;
		$this->fuel = $inputfuel;
		$this->mileage = $inputmileage;
		if ($this->price > 10000)
		{
			$this->tax = 0.15;
		}
		$this->Display_all();		
	}
}
$dodge = new Car(2000,80,'Full',20);
$chevy = new Car(5000,70,'Empty',25);
$ford = new Car(12000,60,'Full',15);
$toyota = new Car(15000,90,'Half',35);
$honda = new Car(8000,85,'Full',30);
?>
</body>
</html>
