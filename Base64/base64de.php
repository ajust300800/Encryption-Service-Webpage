<html> 
	<Title> Decryption</Title>
	<body>
		<h2><center> Decryption</center></h2>
	
	
		<?php 
		$decrypt= $_POST["decrypt"]; 
		echo base64_decode($decrypt); 
		?>
	</body> 
</html>