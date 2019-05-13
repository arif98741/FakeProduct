<?php 

	namespace FakeProduct;
	use FakeProduct\Provider\Brand\Brand;
	use FakeProduct\Property1;
	
	class Generate extends \FakeProduct\Property
	{

	    public function __construct()
	    {
	        // $this->property = $property;
		}
		
		public function randomGenerate($default="")
		{
			
		}

		public static function create()
		{
			
		}

		public function __get($property)
		{
			if (property_exists(new \FakeProduct\Property, $property)) {
				return true;
			}else{
				return "Your requested ";
			}
		}

		public function __call($method,$args="")
		{
			echo 'hi';
		}
	}
?>