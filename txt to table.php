<?php

	$file = fopen("webinar.txt", "r") or die("Unable to open file!");
	echo '<table border="0">';
 
	while (!feof($file)){ 
	    $data = fgets($file);
	    echo "<tr>
	    <td><hr>". str_replace('|','</td><td>',$data).'</td>
	    </tr>';
	}
	echo '</table>';
?>
<style type="text/css">
	body{
		background: -webkit-linear-gradient(bottom,#87CEFA, #F0F8FF);
		background-repeat: no-repeat;
	    font-family: Georgia, serif;
	    margin-left:34rem;
		}
</style>