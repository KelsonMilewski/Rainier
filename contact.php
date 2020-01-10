<!doctype html>
<html>
	<head>
		<title>Contact Us - Rainier Terrariums</title>
		<?php
			include 'include/head.php'
		?>
	</head>
	<body>
		<?php
			include 'include/navbar.php'
		?>
		<article style="height: 100vh;">
			<div class="content" style="margin-top: 150px;">
				<form name="Feedback" method="post" action="mailto:raineirterrariumsbusiness@gmail.com" enctype="text/plain">
					<h2>Email Us</h2>
					<p>Feel free to send us any questions you may have, feedback, or suggestions. Your opinion is greatly appreciated and will help us provide a better experience for our users.</p>
					<textarea name="comment" cols="60" rows="5" placeholder="Type here..."></textarea>
					<br/>
					<input type="submit" value="Send" class="send-btn"/>
				</form>
			</div>
			<?php
			include 'include/footer.php'
			?>
		</article>
	</body>
</html>
