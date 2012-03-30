<html>
	<head />
	<body>
		<?php
			$globalArray = range(20, 1000, 37);
			
			function IsPrimeNumber($number) 
			{
					$isPrime = true;
					for($i = 2; $i < $number; $i++)
					{
						if($number % $i == 0)
						{
							$isPrime = false;
						}
					}
										
					return $isPrime;
			}
				
			function PrintThirdPrime()
			{
				global $globalArray;
				$primeNumberCounter = 0;
				
				foreach($globalArray as $number)
				{
					if(IsPrimeNumber($number))
					{
						$primeNumberCounter++;
					}
					if ($primeNumberCounter >= 3)
					{
						printf("%d\n", $number);
						?>
						<br />
						<?php
						break;
					}
				}
			}
			
			function CheckExistance()
			{
				global $globalArray;
				
				foreach($globalArray as $number)
				{
					if($number == 871)
					{
						printf("The number 871 exists.\n");
						?>
						<br />
						<?php
					}
				}
				
				printf("The number 146,284 does not exist.\n");
			}
			
			PrintThirdPrime();
			CheckExistance();
		?>
	</body>
</html>