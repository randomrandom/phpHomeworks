<?php

	abstract class IceCream {
	   
		public function getType(){
			echo $this->type;
		}
	}

	class Raffi extends IceCream{
		private $type = "Raffi";
	   
		public function getType(){
			echo $this->type;
		}
	}

	class Delta extends IceCream{
		private $type = "Delta";
	   
		public function getType(){
			echo $this->type;
		}
	}

	class Darko extends IceCream{
		private $type = "Darko";
	   
		public function getType(){
			echo $this->type;
		}
	}

	class IceCreamFactory {
	   
		const RAFFI = "Raffi";
		const DELTA = "Delta";
		const DARKO = "Darko";
	   
		public static function createIceCream($iceCreamType){
			switch($iceCreamType){
				case self::RAFFI:
					return new Raffi();
					break;
				case self::DELTA:
					return new Delta();
					break;
				case self::DARKO:
					return new Darko();
			}
			die("IceCream isn't recognized.");
		}
	   
	}

	$iceCreamFactory = new IceCreamFactory();

	$Raffi = $iceCreamFactory->createIceCream(IceCreamFactory::RAFFI);
	$Raffi->getType();

	$Delta = $iceCreamFactory->createIceCream(IceCreamFactory::DELTA);
	$Delta->getType();

	$Darko = $iceCreamFactory->createIceCream(IceCreamFactory::DARKO);
	$Darko->getType();

?>