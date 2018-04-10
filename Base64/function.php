<?php
function EnDecode() {
	$Text = "Hallo Test";
	
	$encode = base64_encode($Text);
	echo $encode."</br>";
	
	$decode = base64_decode($encode); 
	echo $decode; 
}

?> 