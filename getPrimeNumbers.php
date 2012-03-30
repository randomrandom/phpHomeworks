<html>
	<head />
	<body>
		<?php
		
			function IsPrimeNumber($number) {
					$isPrime = true;
					for($i = 2; $i < $number; $i++)
					{
						if($number % $i == 0)
						{
							$isPrime = false;
						}
					}
					
					$returnString = "";
					if($isPrime)
					{
						$returnString = "The number is prime.";
					}
					else
					{
						$returnString = "The number is not prime.";
					}
					
					return $returnString;
				}
				
			if(isset($_GET["number"]))
			{
				$number = $_GET["number"];
				if(is_numeric($number))
				{
					if($number >= 0 && $number <= 19999)
					{
						echo $number . "-";
						echo IsPrimeNumber($number);
					}
					else
					{
						echo "The parameter is not in the".
							"range [0,19999]";
					}
				}
				else
				{
					echo 'This is not a number';
				}
				
				
			}
		?>
	</body>
</html>
