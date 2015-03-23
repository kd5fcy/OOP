<?php  

class Node
{
	public $value, $prev, $next;

	public function __construct($node_value)
	{
		$this->value = $node_value;
	}
}

class DoublyLinkedNode
{
	public $head, $tail;

	public function __construct($first_value)
	{
		$this->head = new Node($first_value);
		$this->tail = (object)null;
	}

	public function new_node($node_value)
	{
		$new_node = new Node($node_value);
		if(isset($this->tail->value))
		{
			$this->tail->next = $new_node;
			$new_node ->prev = $this->tail;
		}
		else
		{
			$this->head->next = $new_node;
			$new_node->prev = $this->head;
		}
		$this->tail = $new_node;
	}
	public function remove_node($value)
	{

	}
}

//$node1 = new Node(3);
//$node2 = new DoublyLinkedNode(5);




// $test = new Node(24601);
// $test1 = new Node(222);
// $test2 = new Node(333);
// $test3 = new Node(444);

$newlist = new DoublyLinkedNode(111);
$newlist->new_node(222);
$newlist->new_node(333);
$newlist->new_node(444);
// $newlist->addNode($test1);
// $newlist->addNode($test2);
// $newlist->addNode($test3);


//$newlist->delNode(2);



var_dump($newlist);
?>