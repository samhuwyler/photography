<?php

$dir = '../media/home/thumbs';	

$files = scandir($dir);

foreach ($files as $file)
{
	if($file != ".." and $file != ".")
	{
		echo $file .";";
	}
} 

?>