<?php 

	include '../Provider/Brand/Brand.php';
	include '../vendor/autoload.php';
	use FakeProduct\Provider\Brand\Brand;
	use FakeProduct\Generate;


	$generate = new \FakeProduct\Generate();
	$brand    = new \FakeProduct\Provider\Brand\Brand;

	$generate->randomGenerate("\FakeProduct\Provider\Brand\Brand");
	for($i = 0; $i<4; $i++){
		echo $brand->RandomGenerate();
		echo "<br>";
	}
	
?>