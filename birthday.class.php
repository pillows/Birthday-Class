<?php
class Birthday
{
	public $dateOfBirth;
	public static function findAge($dateOfBirth, $format)
	{
		$curDate = date("Y/m/d");
		$getMMDDYY = explode("/",$dateOfBirth); //If the date uses dots instead of slashes then replace the slash
		
		$format = strtolower($format);
		switch($format)
		{
			case "mm/dd/yyyy":
				$age = $getMMDDYY[2] - date("Y");
				if($getMMDDYY[0] < date("m"))
				{
					if($getMMDDYY[1] < date("d"))
						$age - 1;
				}
				break;
			case "dd/mm/yyyy":
				$age = $getMMDDYY[2] - date("Y");
				if($getMMDDYY[1] < date("m"))
				{
					if($getMMDDYY[0] < date("d"))
						$age - 1;
				}
				break;
			case "yyyy/mm/dd":
				$age = $getMMDDYY[0] - date("Y");
				if($getMMDDYY[1] < date("m"))
				{
					if($getMMDDYY[2] < date("d"))
						$age - 1;
				}
				break;
			case "yyyy/dd/mm":
				$age = $getMMDDYY[0] - date("Y");
				if($getMMDDYY[1] < date("m"))
				{
					if($getMMDDYY[2] < date("d"))
						$age - 1;
				}
				break;
		}

		echo abs($age);
	}
}

$instance = new Birthday;
echo $instance::findAge("1/1/1990","MM/DD/YYYY");
?>