<header>
	<div class="header">
		<img src="https://www.pngkey.com/png/full/208-2088636_news-amp-events-report-icon-black-png-newspaper.png" style="width: 57px;
        margin-top:5px; height: 36px;
        "  />

		<div class="header-right">
			<?php
			if(isset($_SESSION['role']) && $_SESSION['role'] == '1') {
			?>
				<a href="../HTMLfiles/AdminDashboard.php">Dashboard</a>
			<?php
			}
			?>
			<a class="active" href="../HTMLfiles/Homepage.php">Home</a>
			<a href="../HTMLfiles/About us.php">About Us</a>
			<?php
			if(isset($_SESSION['role']) ) {
			?>
				<a href="../HTMLfiles/ContactForm.php">Contact Form</a>
			<?php
			}
			?>
			<?php
			if(isset($_SESSION['role']) && $_SESSION['role'] == '0') {
			?>
				<a href="../backend/logout.php">Log out</a>
			<?php
			}
			?>
		</div>
	</div>
</header>