<?php 
	
    namespace FakeProduct\Provider\Brand;
	
	class Brand 
	{
        public $type;
        private $file;

	    public function __construct($type="")
	    {
            $this->type = $type;
            $this->file = "brands.php";
        }

        public function RandomGenerate()
        {
            include $this->file;
            $rand = rand(0,count($brands)-1);
            return $brands[$rand];
        }
	}
?>