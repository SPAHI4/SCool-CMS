<?php
abstract class Captcha {
	
	static function check()
	{
		$r = ($_POST['captcha'] == $_SESSION['captcha']);
		$_SESSION['captcha'] = self::generate();
		return $r;
	}
	
	static function reload()
	{
		$_SESSION['captcha'] = self::generate();
	}
	
	static function generate()
	{
		$letters = array();
		$chars = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', '1', '2', '3', '4', '5', '6', '7', '8', '9');
		$count = count($chars) - 1;
		$key = array();
		for($i = 0; $i < 2; $i++)
		{
			$key[$i] = '';
			for($j = 0; $j < 2; $j++)
			{
				list($usec, $sec) = explode(' ', microtime());
				mt_srand((float) $sec + ((float) $usec * 1000000));
				$letter = $chars[mt_rand(0, $count)];
				if (isset ($letters[$letter]))
				{
					--$j;
				}
				else {
					$letters[$letter] = $letter;
					$key[$i] .= $letter;
				}
			}
		}
		return implode('', $key);
	}
}