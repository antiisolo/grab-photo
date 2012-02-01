<?php
	if (!$checkfiles = opendir('./photos')) { //Point to any directory you want. Right now it's looking in photos
		echo "Could not open directory.";
		}
		
		while (FALSE !== ($getfiles = readdir($checkfiles))) {
			if (strpos($getfiles, '.jpg')) { // Only looking for .jpgs, can add more formats
			echo "<img src=\"/photos/". $getfiles . "\" /><br />"; //Outputs <img src= for every jpg in the directory
			}
}
	?>