<?
class Bike
{
	public $price;
	public $max_speed;
	public $miles = 0;

	public function __construct($input1,$input2)
	{
		$this->price = $input1;
		$this->max_speed = $input2;
	}
	public function displayInfo()
	{
		echo $this->price.'<br>';
		echo $this->max_speed.'<br>';
		echo $this->miles.'<br>';
		return $this;
	}
	public function drive()
	{
		echo 'Driving<br>';
		$this->miles = $this->miles + 10;
		return $this;
	}
	public function reverse()
	{
		if($this->miles > 0)
		{
			echo 'Reversing<br>';
			$this->miles = $this->miles - 5;
		}
		else
		{
			echo "Can't back up!<br>";
		}
		return $this;		
	}
}
$schwinn = new Bike(200,50);
$huffy = new Bike(300,40);
$bmx = new Bike(500,35);
$schwinn->drive()->drive()->drive()->reverse()->displayInfo();
// $schwinn->drive();
// $schwinn->drive();
// $schwinn->reverse();
// $schwinn->displayInfo();
echo '<br>';
$huffy->drive()->drive()->reverse()->reverse()->displayInfo();
// $huffy->drive();
// $huffy->reverse();
// $huffy->reverse();
// $huffy->displayInfo();
echo '<br>';
$bmx->reverse()->reverse()->reverse()->displayInfo();
// $bmx->reverse();
// $bmx->reverse();
// $bmx->displayInfo();
?>