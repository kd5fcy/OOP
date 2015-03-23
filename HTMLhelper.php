<html>
<head>
	<title>HTML Helper</title>
	<style>
		table
		{
			border-collapse: collapse;
		}
		th, td
		{
			text-align: center;
			padding: 10px;
			margin: 0px;
			border: 1px solid lightgrey;
		}
	</style>
</head>
<body>
<?
$sample_table = ['Index1'=>'data1','Index2'=>'data2','Index3'=>'data3','Index4'=>'data4'];
class HTML_Helper
{
	public $array = [];
	public function __construct($grab)
		{
			$this->array = $grab;
		}
	public function print_table()
		{
			echo '<table><tr>';
			foreach ($this->array as $this->index => $this->data) {
				echo '<th>' . $this->index . '</th>';
			}
			echo '</tr>';
			echo '<tr>';
			foreach ($this->array as $this->data) {
				echo '<td>' . $this->data . '</td>';
			}
			echo '</tr>';
			echo '</table>';
		}
	public function print_select() //not exactly sure what's being asked for here... but probably not this. No reason to have all keys for each index repeating.
		{
			foreach ($this->array as $this->key => $this->value) {
				echo '<select name="' . $this->key . '">';
				foreach ($this->array as $this->key => $this->value) {
					echo '<option value ="' . $this->value . '">' . $this->value . '</option>';
				}
				echo '</select>';
			}
		}
}
$obj1 = new HTML_Helper($sample_table);
$obj1->print_table();
$obj1->print_select();
?>
</body>
</html>

