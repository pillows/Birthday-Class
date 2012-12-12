<?php
class Birthday
{
	public $dateOfBirth;
	//If $date is in format mm/dd/yyyy
	public static function findAge($dateOfBirth)
	{
		$curDate = date("Y/m/d");
		//echo $curDate;
		$getMMDDYY = explode("/",$dateOfBirth); //If date is in mm.dd.yyyy then replace the / with a .
		$age = $getMMDDYY[2] - date("Y");
		if($getMMDDYY[0] < date("m"))
		{
			if($getMMDDYY[1] < date("d"))
				$age - 1;
		}
		
		echo abs($age);
	}
	
	/* If $dateOfBirth is in format dd/mm/yyyy
	public static function findAge($dateOfBirth)
	{
		$curDate = date("Y/m/d");
		//echo $curDate;
		$getMMDDYY = explode("/",$dateOfBirth); //If date is in mm.dd.yyyy then replace the / with a .
		$age = $getMMDDYY[2] - date("Y");
		if($getMMDDYY[1] < date("m"))
		{
			if($getMMDDYY[0] < date("d"))
				$age - 1;
		}
		
		echo abs($age);
	}
	*/
	
	/* If $dateOfBirth is in format yyyy/mm/dd
	public static function findAge($dateOfBirth)
	{
		$curDate = date("Y/m/d");
		//echo $curDate;
		$getMMDDYY = explode("/",$dateOfBirth); //If date is in mm.dd.yyyy then replace the / with a .
		$age = $getMMDDYY[0] - date("Y");
		if($getMMDDYY[1] < date("m"))
		{
			if($getMMDDYY[2] < date("d"))
				$age - 1;
		}
		
		echo abs($age);
	}
	*/
	
	/* If $dateOfBirth is in format yyyy/dd/mm
	public static function findAge($dateOfBirth)
	{
		$curDate = date("Y/m/d");
		//echo $curDate;
		$getMMDDYY = explode("/",$dateOfBirth); //If date is in mm.dd.yyyy then replace the / with a .
		$age = $getMMDDYY[0] - date("Y");
		if($getMMDDYY[1] < date("m"))
		{
			if($getMMDDYY[2] < date("d"))
				$age - 1;
		}
		
		echo abs($age);
	}
	*/
}

$instance = new Birthday;
echo $instance::findAge("12/14/2012") . "\n";
?>