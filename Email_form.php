<html>
	<head>
		<title>CodeIgniter Email Example</title>
	</head>
	<body>
		<?php
		if(isset($data)) echo $data;
		echo form_open('/Email/send_mail');
		?>
	
		<input type ="email" name="email"required/>
		<input type ="submit" value="SEND MAIL">
	
		<?php
			echo form_close();
		?>
	</body>
</html>