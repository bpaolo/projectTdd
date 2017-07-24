<?php 
namespace TDD;
class Challenge
{
	public $size = 100;
	public $output = [];
  
	function findOutMultiples(){
	$x = 1;
		for ($x=1; $x <= $this->size; $x++){
			$div3  = ($x % 3 == 0);
			$div5  = ($x % 5 == 0);
			$div35 = ($div3 && $div5);

			$this->lineOutput($x, !$div3 && !$div5, $x);
			$this->lineOutput($x, $div3 && $div5, "Liniano");
			$this->lineOutput($x, $div3, "Linio");
			$this->lineOutput($x, $div5, "IT");
		}  
	}
  
	function lineOutput($n, $exp, $out){
		if($exp && !array_key_exists($n, $this->output)){
			$this->output[$n] = $out;
		}
	}
  
	function getOutput(){
		return $this->output;
	}
  
  	function printOutput(){
  	print_r($this->output);
  }
}

$stackMulti = new Challenge();
$stackMulti->findOutMultiples();
$stackMulti->printOutput();
?>