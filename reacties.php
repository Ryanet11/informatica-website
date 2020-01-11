<!DOCTYPE HTML>
<!--
	Minimaxing by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Compressie Programma's</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/reacties.css" />
	</head>
	<body>
		<div id="page-wrapper">
			<!-- Header -->
				<div id="header-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<header class="topnav">
									<h1><a href="index.html" id="logo">Datacompressie</a></h1>
									<nav id="myLinks">
										<a href="index.html">Homepage</a>
										<a href="w-i-d.html">Wat is datacompressie</a>
										<a href="t-d.html">Typen datacompressie</a>
										<a href="t.html">Toepassingen datacompressie</a>
										<a href="a.html">Algoritmen</a>
										<a href="c-p.html">Compressie Programma's</a>
										<a href="reacties.php" class="active">Reacties</a>
									</nav>
									<a href="javascript:void(0);" class="icon" onclick="customNavBar()">
										<i class="fa fa-bars"></i>
									</a>
								</header>

							</div>
						</div>
					</div>
				</div>

			<!-- Main -->
				<div id="main">
					<div class="container">
						<div class="row main-row">
							<div class="col-8 col-12-medium">
								
								<section>
									<h2>Reacties</h2>
									<p>Hier kan je reacties achterlaten voor de website.</p>
										<?php 
										include "php/db_connection.php";
										$conn = OpenCon();
										$sql = "SELECT * FROM comments";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
											while ($row = $result->fetch_assoc()) {
												echo "<h3>" . $row["Name"] ."</h3>";
												echo "<h4>" . $row["Message"] . "</h4>";
												echo "<h6>" . $row["Date"] . "</h6>";
												echo "<hr>";
											}
										}

										?>
								</section>
								
							</div>
							<div class="col-4 col-12-medium">
								<section id="commentbox">
									<form action="reacties.php" method="post">
										<h2 id="name">Naam:</h2><br><input type="text" name="Name"><br>
										<h2 id="message">Reactie:</h2><br><input type="text" name="Message"><br>
										<input class="pxmar" type="submit" name="Submit1" value="Reageer!"><br>
									</form>
									<?php
									if (isset($_POST["Submit1"])) {
										if (empty($_POST["Name"]) or empty($_POST["Message"])) {
											echo "<h1>Je moet alle velden invullen.</h1>";
										} else {
											if (strlen($_POST["Name"]) > 11) {
												echo "<h1>Je hebt een te lange naam ingevuld. De naam moet korter zijn dan 11 characters.</h1>";
											} else {
												$name = $_POST["Name"];
												$message = $_POST["Message"];
												$sql1 = "SELECT * FROM comments WHERE Name='".$name."' && Message='".$message."'";
												$result = $conn->query($sql1);
												$row = $result->fetch_assoc();
												if ($result->num_rows == 0) {
													$sql = "INSERT INTO `comments`(`Name`, `Message`) VALUES ('$name', '$message')";
													$conn->query($sql);
													echo "<p>SUCCES Herlaad de pagina om je reactie te bekijken</p>";
												}
												
												
												CloseCon($conn);
											}
										}
									}
									?>
								</section>
							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-8 col-12-medium">

								<section>
									<h2>Onze bronnen.</h2>
									<div>
										<div class="row">
											<div class="col-3 col-6-medium col-12-small">
												<ul class="link-list">
													<li><a href="https://nl.wikipedia.org/wiki/Datacompressie ">datacompressie</a></li>
													<li><a href="https://gisgeography.com/lossless-compression-vs-lossy-compression/ ">soorten compressie</a></li>
													<li><a href="https://en.wikipedia.org/wiki/Lossy_compression ">lossy compressie</a></li>
													<li><a href="https://nl.gadget-info.com/difference-between-lossy-compression ">verschillen compressie methoden</a></li>
													<li><a href="https://nl.wikipedia.org/wiki/Datacompressie#Exact_omkeerbare_compressie ">lossless compressie</a></li>
												</ul>
											</div>
											<div class="col-3 col-6-medium col-12-small">
												<ul class="link-list">
													<li><a href="https://nl.wikipedia.org/wiki/Aritmetische_codering ">Aritmetische codering</a></li>
													<li><a href="https://nl.wikipedia.org/wiki/Burrows-Wheelertransformatie ">burrows wheelertransformatie</a></li>
													<li><a href="https://en.wikipedia.org/wiki/Dynamic_Markov_compression ">dynamisch markov compressie</a></li>
													<li><a href="https://nl.wikipedia.org/wiki/Haal-naar-vorencodering ">haal naar voren codering</a></li>
													<li><a href="https://nl.wikipedia.org/wiki/Huffmancodering ">huffman codering</a></li>
												</ul>
											</div>
											<div class="col-3 col-6-medium col-12-small">
												<ul class="link-list">
													<li><a href="https://nl.wikipedia.org/wiki/Lempel_Ziv_Welch ">lempel ziv welch codering</a></li>
													<li><a href="https://nl.wikipedia.org/wiki/Run-length_encoding ">run length codering</a></li>
													<li><a href="https://nl.wikipedia.org/wiki/7-Zip ">7 zip</a></li>
													<li><a href="https://nl.wikipedia.org/wiki/Gzip ">gzip</a></li>
													<li><a href="https://nl.wikipedia.org/wiki/Bzip2 ">bzip2</a></li>
												</ul>
											</div>
											<div class="col-3 col-6-medium col-12-small">
												<ul class="link-list">
													<li><a href="https://nl.wikipedia.org/wiki/WinZip ">winzip</a></li>
													<li><a href="https://nl.wikipedia.org/wiki/WinRAR ">winrar</a></li>
													<li><a href="https://icons8.com ">iconen</a></li>
													<li><a href="https://rolid.home.xs4all.nl/wdz/datacom/datacom.html ">data compressie</a></li>
												</ul>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="col-12">

								<div id="copyright">
									&copy; Untitled. All rights reserved. | Template: <a href="http://html5up.net">HTML5 UP</a>
								</div>

							</div>
						</div>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/utils2.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/navbar.js"></script>

	</body>
</html>
