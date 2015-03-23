<?php 
$unsorted = array();
for ($i=0; $i < 10000; $i++) 
{
	$rand = rand(0,10000);
	$unsorted[] = $rand;
}
class Node
{
	public $left;
	public $value;	
	public $right;
	public function __construct($value)
	{
		$this->value = $value;
	}
}
class BST
{
	public $root;
	public $permroot;
	public function __construct($array)
	{	
		$start = microtime(true);
		$this->root = (object)null;		
		foreach ($array as $key => $value) 
		{
			$current = new Node($value);
			$this->insvalue($current);
		}
		$total = microtime(true) - $start;
		echo number_format($total,2) . ' seconds to iterate.<br>';
	}
	public function insvalue($obj)
	{
		if (!isset($this->root->value))
		{
			$this->root = $obj;
			$this->permroot = $this->root;
			//echo $this->root->value . ' root is set<br>';
		}	
		else
		{
			if ($obj->value < $this->root->value)
			{
				if(!isset($this->root->left->value))
				{
					$this->root->left = $obj;
					//echo $obj->value . ' write left<br>';
				}
				else
				{
					$this->root= $this->root->left;
					//echo $obj->value . ' move left<br>';
					$this->insvalue($obj);
				}
			}
			elseif ($obj->value >= $this->root->value) 
			{
				if(!isset($this->root->right->value))
				{
					$this->root->right = $obj;
					//echo $obj->value . ' write right<br>';
				}
				else
				{
					$this->root = $this->root->right;
					//echo $obj->value . ' move right<br>';
					$this->insvalue($obj);
				}
			}
		}
		$this->root = $this->permroot;
	}
	public function printlist($value)
	{
		if ($this->root->value == $value)
		{
			echo $this->root->value . ' found it!<br>';
		}	
		elseif(isset($this->root->left->value) && $value < $this->root->value)
		{
			echo $this->root->value . ' move left.<br>';
			$this->root= $this->root->left;
			$this->printlist($value);
		}
		elseif(isset($this->root->right->value) && $value > $this->root->value)
		{
			echo $this->root->value . ' move right.<br>';
			$this->root = $this->root->right;
			$this->printlist($value);
		}
		else
		{
			echo 'Cannot find in list<br>';
		}
		$this->root = $this->permroot;
	}
}
$tree = new BST($unsorted);
$int = rand(0,10000);
echo 'Trying to find ' . $int . ' in the list.<br>';
$tree->printlist($int);
?>