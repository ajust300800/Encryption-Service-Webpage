<html>
	<Title> Encryption </Title> 
	<body> 
		<h2><center> Encrypteter Text </center></h2><br>
		<?php 
			$encrypt= $_POST["encrypt"];
			
			
			echo base64_encode($encrypt);
		?> 
	</body> 
</html> 
