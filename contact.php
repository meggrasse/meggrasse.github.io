<!DOCTYPE = html>
<html>
<head>
	<link rel="icon" href="http://meggrasse.com/favicon.ico">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="contact.css" rel="stylesheet">
	<title>Contact Meg</title>
</head>
<body>
	<a class="btn btn-primary btn-lg" href="http://meggrasse.com/" role="button">Home</a>	
	<a class="btn btn-primary btn-lg" href="http://meggrasse.com/about" role="button">About</a>
	<h1>Contact Me</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-1">
				<p>Send me an email at <a href="mailto:meggrasse@gmail.com">meggrasse@gmail.com</a>. Or... </p>
			</div>
		</div>
	</div>
	<form method="POST" action="sendmail.php">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-1">
    				<label for="name">Name</label>
    			</div>
    			<div class="col-md-4 col-md-offset-2">
    				<label for="email">Email address</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-1">
					<input type="text" class="form-control" name="name" placeholder="Name">
					<?php echo "<p class='text-danger'>$errName</p>";?>
  				</div>
  				<div class="col-md-4 col-md-offset-2">
    				<input type="email" class="form-control" name="email" placeholder="Email">
    				<?php echo "<p class='text-danger'>$errEmail</p>";?>
  				</div>
  			</div>
  		</div>
  		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<label for="message">Message</label>
  					<textarea class="form-control" rows="6" name="message" placeholder="Message"></textarea>
  					<?php echo "<p class='text-danger'>$errMessage</p>";?>
  				</div>
  			</div>
  		</div>
  		<div class="col-md-1 col-md-offset-9">
  			<button type="submit" class="btn btn-primary primary btn-lg">Send</button>
  		</div>
  		<?php echo $result; ?>  
  	</form>
</body>
</html>