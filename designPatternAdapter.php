<html>
	<head />
	<body>
		<?php
			class Car 
			{
				private $brand;
				private $model;
				
				function __construct($brand_in, $model_in)
				{
					$this->brand = $brand_in;
					$this->model = $model_in;
				}
				
				function getBrand()
				{
					return $this->brand;
				}
				
				function getModel()
				{
					return $this->model;
				}
			}
		
			class CarAdapter
			{
				private $coloredCar;
				private $color;
				
				function __construct(Car $simpleCar, $color_in)
				{
					$this->coloredCar = $simpleCar;
					$this->color = $color_in;
				}
				
				function getCarParameters()
				{
					$toReturn = "This is" . $this->color . 
						' ' . $this->coloredCar->getBrand() . 
						' model: ' . $this->coloredCar->getModel();
				}
			}
		
		?>
	</body>
</html>
