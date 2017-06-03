<?php	
	class counter
	{
		private static $count = 0;
	
		public function __construct()
		{
			self::$count++;
		}
		public function __destruct()
		{
			self::$count--;
		}
		public static function get_count()
		{
			return self::$count;
		}
	}
?>