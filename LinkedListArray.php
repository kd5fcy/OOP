<?php 
class Node
{	
    public function __construct($data) 
    {
    	$this->data = $data;
    }
	public $prev = null;
	public $data;
	public $next = null;
}
class DoublyLinkedNode
{	
	public $head;
	public $tail;
	public function __construct($value)
	{
		$obj = new Node($value);
		$this->list[] = $obj;
		$this->head = $obj->data;
		$this->tail = $obj->data;
	}
	public function addNode($value)
	{
		$obj = new Node($value);
		foreach ($this->list as $key => $value) {
			if($value->next == null)
			{
				$value->next = $obj->data;
			}
		}
		$obj->prev = $this->tail;
		$this->tail = $obj->data;
		$this->list[] = $obj;
	}
	public function delNode($place)
	{	
		$counter = 0;
		foreach($this->list as $object => $var)
		{
			$counter++;
			if ($counter == ($place - 1)) {
				$temp0 = $var->data;
			}
			if ($counter == ($place + 1)) {
				$temp1 = $var->data;
				$var->prev = $temp0;
			}
		}
		$counter = 0;
		foreach ($this->list as $object => $var) {
			$counter++;
			if($counter == ($place - 1))
			{
				$var->next = $temp1;
			}
		}
	}
	public function addNodeAfter($value,$nth_value)
	{

	}
	public function printList()
	{

	}
}




// $test = new Node(24601);
// $test1 = new Node(222);
// $test2 = new Node(333);
// $test3 = new Node(444);

$newlist = new DoublyLinkedNode(111);
$newlist->addNode(222);
$newlist->addNode(333);
$newlist->addNode(444);


$newlist->delNode(2);



// var_dump($newlist);
// var_dump($test);
// var_dump($test1);
// var_dump($test2);
// var_dump($test3);





var_dump($newlist);

?>