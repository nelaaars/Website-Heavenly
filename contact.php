<?php
  include_once("config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact | Heavenly Studio</title>
	<link rel="stylesheet" type="text/css" href="assets/stylecontact.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap">
</head>
<body>
	<section id="contact">
		<p class="title">- C O N T A C T</p>
		<div>
			<table>
				<tr>
					<td>
						<p class="h1" id="h1-contact">Hi! Interesting<br>working with us?</p>
						<p class="desc" id="desc-contact">We’d love to hear from you. Please share your thoughts in the form and we’ll be in</p>
					</td>
					<td>
						<form action="contact.php" method="POST">
					        <p>
					            <input id="input-text" class="input" type="text" name="name" placeholder="Your name">
					        </p>
					        <p>
					            <input id="input-text" class="input" type="email" name="email" placeholder="Your fancy email">
					        </p>
					        <p>
					            <input id="input-text" class="input" type="text" name="budget" placeholder="Project budget (in USD)">
					        </p>
					        <table id="type">
					        	<tr>
									<p id="label">Project type</p>
									<td width="280">
										<p class="desc"><input type="checkbox" name="type[]" value="Visual Branding"> Visual Branding</p>
										<p class="desc"><input type="checkbox" name="type[]" value="Web Design"> Web Design</p>
										<p class="desc"><input type="checkbox" name="type[]" value="Graphic Design"> Graphic Design</p>
										<p class="desc"><input type="checkbox" name="type[]" value="Product Design"> Product Design</p>
									</td>
									<td>
										<p class="desc"><input type="checkbox" name="type[]" value="Illustration"> Illustration</p>
										<p class="desc"><input type="checkbox" name="type[]" value="Motion Design"> Motion Design</p>
										<p class="desc"><input type="checkbox" name="type[]" value="Animation"> Animation</p>
										<p class="desc"><input type="checkbox" name="type[]" value="Others"> Others</p> 
									</td>
								</tr>
							</table>
					        <p>
					            <input id="input-text" class="input" type="text" name="brief" placeholder="Tell me about your project">
					        </p>
					        <p>
					            <input type="submit" name="submit" value="Send">
					        </p>
					    </form>

					    <?php
        					if (isset($_POST['submit'])) {
        					$name = $_POST['name'];
        					$email = $_POST['email'];
        					$budget = $_POST['budget'];
          					$type = implode(",", $_POST['type']);
          					$brief = $_POST['brief'];

          					$result = mysqli_query($mysqli, "INSERT INTO contact(name,email,budget,type,brief) VALUES('$name','$email','$budget','$type','$brief')");
    						}
    					?>
					</td>
					<td>
						<nav align="right">
							<a href="home.php">Home</a><br>
    						<a href="about.php">About</a><br>
    						<a href="portofolio.php">Portofolio</a><br>
    						<a href="contact.php">Contact</a>
						</nav>
					</td>
				</tr>
			</table>
		</div>
	</section>

	<section id="sosmed">
		<div class="sosmed">
			<p class="title">- S O C I A L  M E D I A</p>
			<a href="https://dribbble.com">
				<img class="dribbble" src="assets/dribbble.png">
			</a>
			<a href="https://instagram.com">
				<img class="instagram" src="assets/instagram.png">
			</a>
			<a href="https://skype.com">
				<img class="skype" src="assets/skype.png">
			</a>
			<a href="https://twitter.com">
				<img class="twitter" src="assets/twitter.png">
			</a>
			<a href="https://linkedin.com">
				<img class="linkedin" src="assets/linkedin.png">
			</a>
			<a href="https://facebook.com">
				<img class="facebook" src="assets/facebook.png">
			</a>
		</div>
	</section>

	<section id="footer">
		<div class="footer">
			<table>
				<tr>
					<td width="844"><p class="desc">© 2021 — Design and Develop by Heavenly Studio</p></td>
					<td><p class="desc">Thanks for scrolling, that’s all peeps👋🏻</p></td>
    			</tr>
    		</table>
    	</div>
	</section>
</body>
</html>