<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>Email Me</title>
	</head>
	<body>
		<?php
			//store the inputs in variables
			$name = $_POST['name'];
			$email = $_POST['email'];
			$content = $_POST['content'];
			$new_content = "From: ".$name."\n\n".$content;
			
			// use wordwrap() if lines are longer than 70 characters
			$new_content = wordwrap($new_content,100);

			mail('200257310@student.georgianc.on.ca' , 'Portfolio Inquiries', $new_content, "From: ".$email);
			
			header('Location: contact.html');
		?>
	</body>
</html>
