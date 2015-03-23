<?
class Animal
{
	public $name;
	public $health = 100;
	public function __construct($input)
	{
		$this->name = $input;
	}
	public function walk()
	{
		$this->health = $this->health - 1;
		return $this;
	}
	public function run()
	{
		$this->health = $this->health - 5;
		return $this;
	}
	public function displayHealth()
	{
		echo $this->name.'<br>';
		echo $this->health.'<br>';
		return $this;
	}
}
$animal1 = new Animal('animal');
$animal1->walk()->walk()->walk()->run()->run()->displayHealth();
class Dog extends Animal
{
	public $health = 150;
	public function pet()
	{
		$this->health = $this->health + 5;
		return $this;
	}
}
$animal2 = new Dog('Rocket');
$animal2->walk()->walk()->walk()->run()->run()->pet()->displayHealth();
class Dragon extends Animal
{
	public $health = 170;
	public function displayHealth()
	{
		echo 'This is a Dragon!<br>';
		parent::displayHealth();
	}
	public function fly()
	{
		$this->health = $this->health - 10;
		return $this;
	}
}
$animal3 = new Dragon('Drago');
$animal3->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();
?>