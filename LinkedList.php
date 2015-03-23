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
		$this->head = $obj;
		$this->tail = (object)null;
	}
	public function addNode($value)
	{
		$obj = new Node($value);
		if(isset($this->tail->data))
		{
			$obj->prev = $this->tail;
			$this->tail->next = $obj;
		}
		else
		{
			$obj->prev = $this->head;
			$this->head->next = $obj;			
		}
		$this->tail = $obj;
	}
	public function delNode($value)
	{	
		if($this->head->data == $value)
		{
			$this->head = $this->head->next;
			$this->head->prev = null;
		}
		else
		{
			$temp = $this->head;
			$counter = 0;
			while(isset($temp->next->data))
			{
				if($temp->next->data != $value)
				{
					$temp = $temp->next;
				}
				else
				{
					$counter++;
					if(isset($temp->next->next->data))
					{
						$temp->next->next->prev = $temp;
						$temp->next = $temp->next->next;
					}
					else
					{
						$this->tail = $temp;
						$this->tail->next = null;
					}

				}
			}
			if($counter === 0)
			{
				echo 'Cannot delete value. Not found in list.<br>';
			}
		}
	}
	public function addNodeAfter($value,$nth_value)
	{
		$obj = new Node($value);
		$temp = $this->head;
		if($nth_value === 0)
		{
			$obj->next = $this->head;
			$this->head = $obj;
		}
		else
		{
			$counter = 1;
			while($counter < $nth_value && $temp->next != null)
			{
				$counter++;
				$temp = $temp->next;
			}
			$obj->next = $temp->next;
			$obj->prev = $temp;
			if(!isset($obj->next->data))
			{
				$this->tail = $obj;
			}
			else
			{
				$temp->next->prev = $obj;
			}
			$temp->next = $obj;
		}
	}
	public function printList()
	{
		$temp = $this->head;
		echo $this->head->data . '<br>';
		while($temp->next != null)
		{
			$temp = $temp->next;
			echo $temp->data . '<br>';
		}
	}
}
$newlist = new DoublyLinkedNode(123);
$newlist->addNode(234);
$newlist->addNode(345);
$newlist->addNode(456);
$newlist->addNode(567);
$newlist->addNode(678);
$newlist->addNode(789);
$newlist->addNode(890);
$newlist->addNode(901);

$newlist->addNodeAfter('Added Node',3);

$newlist->delNode(234);

$newlist->printList();

?>