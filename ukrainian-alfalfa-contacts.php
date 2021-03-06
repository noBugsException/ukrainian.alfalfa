<?php
$cookie_name = "bookie";
$cookie_value = "doraley666";
setcookie($cookie_name, $cookie_value, time() + (86400 * 300), "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html>
<head>
<title>Contact us</title>
	<meta name="description" content="Contact Ukrainian Alfalfa LLC to order
		alfalfa hay bales or pellets.">
	<meta name="keywords" content="contacts, contact form, ukrainian alfalfa,
		address, emails, phone, facebook, linkedin, twitter, google+, skype">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body class="contacts">
<?php include_once("google-tag-manager.php") ?>
<?php include("_partials/header.php"); ?>

<section>
	<h1>Contacts</h1>
  <div class="container">
    <div class="company-contacts-wrapper">
      <div class="company-contacts">
        <!-- address -->
				<div class="box">
					<h2>Address</h2>
		      <div class="text-wrapper">
		        <p>Ukraine, Kyiv, 03040</p>
		        <p>Mykhailo Stelmakh Street, Building 10A</p>
		        <p></p>
		      </div>
				</div>
        <!-- online -->
				<div class="box">
		      <h2>Emails</h2>
		      <div class="text-wrapper">
		        <p><a href="mailto:ukrainian.alfalfa@gmail.com"
							title="email Ukrainian Alfalfa">
							ukrainian.alfalfa@gmail.com</a></p>
		        <p><a href="mailto:sales@alfalfa.in.ua"
							title="email Ukrainian Alfalfa sales department">
							sales@alfalfa.in.ua</a></p>
		        <p><a href="mailto:office@alfalfa.in.ua"
							title="email Ukrainian Alfalfa to the main office">
							office@alfalfa.in.ua</a></p>
		      </div>
				</div>
        <!-- phone -->
				<div class="box">
        <h2>Phone</h2>
	        <div class="text-wrapper">
	          <p><a href="tel:38-099-708-1618" title="Call us">
							+38 099 708 1618</a></p>
	        </div>
				</div>
        <!-- social -->
				<div class="box">
	        <div class="text-wrapper">
						<h2>Social</h2>
	          <p><a href="http://www.facebook.com/ukrainianalfalfa"
							title="Ukrainian Alfalfa on Facebook">Facebook</a></p>
	          <p><a href="http://www.linkedin.com/company/ukrainian-alfalfa-llc"
							title="Ukrainian Alfalfa on LinkedIn">LinkedIn</a></p>
	          <p><a href="http://www.plus.google.com/+AlfalfaInUa"
							title="Ukrainian Alfalfa on Google Plus">Google+</a></p>
	          <p><a href="http://www.twitter.com/u_alfalfa"
							title="Ukrainian Alfalfa on Twitter">Twitter</a></p>
	        </div>
				</div>
        <!-- Skype -->
				<div class="box">
	        <h2>Skype</h2>
	        <div class="text-wrapper">
	          <p>Find us on Skype using either the phone number, company name
	            or email ukrainian.alfalfa@gmail.com</p>
	        </div>
				</div>
      </div>
    </div>

		<!-- contact form -->
    <div class="contact-form-wrapper">
      <div class="contact-form">
				<div class="box">
	        <div class="h2-wrapper"><h2>Contact us</h2></div>
	        <form action="contact-handler.php" method="post" class="text-wrapper">
	          <label for="email">Email</label>
	          <input name="email" type="email" required />
	          <label for="message">Message</label>
	          <textarea name="message" required></textarea>
	          <input name="send-btn" type="submit" value="Send message" />
	        </form>
				</div>
      </div>
    </div>
  </div> <!-- end contact form -->

	<div class="greeting">Welcome to Ukrainian Alfalfa</div>
</section>
<?php include("_partials/footer.php"); ?>
<?php include_once("analyticstracking.php") ?>
</body>
</html>
