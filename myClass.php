<?php
require_once 'config.php';
class myClass
{
	public static function generate($length) 
	{
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}
	public function getD($gid)
	{
		$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		$res=mysqli_query($con,"select * from users where uid = '$gid'");	
		$arr = array();
		while($row = $res->fetch_assoc())
		{
			$arr= $row;
		}
		mysqli_close($con);
		return $arr;
	}
	public function add($name,$msg,$type)
	{
		$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		$gid=$this->generate(10);
		$res=mysqli_query($con,"insert into users values ('$gid','$name','$msg','$type')");
		mysqli_close($con);
		if($res)
		{
			echo "<script>window.open('index.php?gid=$gid','_parent');</script>";
		}
		else
		{
			echo "<script>alert('Something Went Wrong, Try again');</script>";
		}
	}
}
?>