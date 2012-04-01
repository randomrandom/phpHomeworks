<?php
	class Database
	{
		private $name;
		private $pool;
		
		function __construct($name_in, $pool_in)
		{
			$this->name = $name_in;
			$this->pool = $pool_in;
		}
		
		function query()
		{
			echo 'The database is performing a query <br />\n';
		}
	}
	
	class DatabaseSingleton
	{
		private static $theDatabase;
		private static $pool = new array();
		
		function __construct()
		{
			echo 'The database is created<br />\n';
		}
		
		function getDatabase()
		{
			if(!self::$theDatabase)
			{
				self::$theDatabase = new Database("databse", $pool);
			}
			
			return self::$theDatabase;
		}
		
		function query()
		{
			self::$theDatabase->query();
		}
	}

?>