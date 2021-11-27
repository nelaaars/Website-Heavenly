<?php
  include_once("config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home | Heavenly Studio</title>
	<link rel="stylesheet" type="text/css" href="assets/stylehome.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap">
</head>
<body>
	<section id="header">
		<div class="header">
			<table>
				<tr>
					<td><img src="assets/header.png"></td>
					<td>
						<p class="title" id="intro">- I N T R O D U C T I O N</p>
						<p class="h1" id="h1-intro">We Are Heavenly a Creative<br>Agency Based in Yogyakarta</p>
						<p class="desc" id="desc-intro">This is our personal space where we’re trying to express our creativity.<br>Always passionate about creating beautiful and useful things. Looking<br>forward to an amazing project with you.</p>
						<table>
							<tr>
								<td><p class="textbutton" id="textbutton-intro">Got a project?</p></td>
								<td>
									<a href="contact.php">
										<img id="button-intro" src="assets/button-intro.png">
									</a>
								</td>
							</tr>
						</table>
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

	<section id="expert">
		<div class="expert">
			<p class="title">- E X P E R T I S E</p>
			<img class="expert1" src="assets/expert1.png">
			<img class="expert2" src="assets/expert2.png">
			<img class="expert3" src="assets/expert3.png">
			<img class="expert4" src="assets/expert4.png">
			<img class="expert5" src="assets/expert5.png">
			<img class="expert6" src="assets/expert6.png">
			<img class="expert7" src="assets/expert7.png">
			<img class="expert8" src="assets/expert8.png">
			<img class="expert9" src="assets/expert9.png">
		</div>
	</section>

	<section id="porto">
		<div class="porto">
			<p class="title">- P O R T O F O L I O</p>
			<img class="porto1" src="assets/porto1.png">
			<img class="porto2" src="assets/porto2.png">
			<img class="porto3" src="assets/porto3.png">
			<img class="porto4" src="assets/porto4.png">
			<img class="porto5" src="assets/porto5.png">
			<a href="portofolio.html">
				<img class="portomore" src="assets/portomore.png">
			</a>
		</div>
	</section>

	<section id="contact">
		<p class="title">- C O N T A C T</p>
		<div>
			<table>
				<tr>
					<td width="267">
						<p class="h1" id="h1-contact">Hi! Interesting<br>working with us?</p>
						<p class="desc" id="desc-contact">We’d love to hear from you. Please share your thoughts in the form and we’ll be in</p>
					</td>
					<td>
						<form action="contact.html" method="POST">
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
										<p class="desc"><input type="checkbox" name="type1" value="Visual Branding"> Visual Branding</p>
										<p class="desc"><input type="checkbox" name="type2" value="Web Design"> Web Design</p>
										<p class="desc"><input type="checkbox" name="type3" value="Graphic Design"> Graphic Design</p>
										<p class="desc"><input type="checkbox" name="type4" value="Product Design"> Product Design</p>
									</td>
									<td>
										<p class="desc"><input type="checkbox" name="type5" value="Illustration"> Illustration</p>
										<p class="desc"><input type="checkbox" name="type6" value="Motion Design"> Motion Design</p>
										<p class="desc"><input type="checkbox" name="type7" value="Animation"> Animation</p>
										<p class="desc"><input type="checkbox" name="type8" value="Others"> Others</p> 
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
					</td>
					<td>
						<nav align="right">
							<a></a><br>
    						<a></a><br>
    						<a></a><br>
    						<a></a>
						</nav>
					</td>
				</tr>
			</table>
		</div>
	</section>

	<section id="testi">
		<div class="testi">
			<p class="title">- T E S T I M O N I A L S</p>
			<table>
				<tr>
					<td width="400">
						<p class="h1" id="h1-testi">Hear from our<br>happy client</p>
					</td>
					<td>
						<div align="center" class="testimoni">
							<img class="profile" src="assets/profile.png">
							<p class="desc" id="desc-testi">Heavenly is a very good team. The work was fast and as expected. The price is also very<br>worth it with the end result. I am very happy to collaborate with this team. I highly<br>recommend Heavenly for those of you who are looking for UIUX services</p>
							<p id="textbutton-testi">Eloise Brigerton, CEO of Local.id</p>
						</div>
					</td>
				</tr>
			</table>
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