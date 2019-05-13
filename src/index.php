<?php 

	include '../Provider/Brand/Brand.php';
	include '../vendor/autoload.php';
	use FakeProduct\Provider\Brand\Brand;
	use FakeProduct\Generate;

	$obj =  new \FakeProduct\Generate;
	$obj->test;
	$obj->test();
	//echo "<pre>";
	//print_r($obj);
	
	
?>