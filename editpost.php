<?php require_once("includes/head_section.php") ?>
<title> Home Page Blog </title>
<style>
	.addlink {
		position: relative;
		top: 10px;
		right: 10px;
		float: right;
	}

	.addalink:link:hover {
		background-color: darkgreen;
	}

	.addalink:link {
		color: whitesmoke;
		display: block;
		width: 100px;
		height: 40px;
		background-color: forestgreen;
		box-sizing: border-box;
		border-radius: 15px;
		text-align: center;
		font-size: 15px;
	}

	.addalink:visited {
		color: whitesmoke;
		display: block;
		width: 200px;
		height: 50px;
		background-color: forestgreen;
		box-sizing: border-box;
		text-align: center;
	}

	.addalink {
		text-decoration: none;
		padding-top: 10px;
	}
</style>
</head>

<body>
	<div class="container">
		<!-- navbar -->
		<?php include("includes/navbar.php") ?>

		<div class="addlink">
			<a href="newpost.php" class="addalink"> Add Post + </a>
		</div>

		<!-- Page content -->
		<div class="content">

		</div>

	</div>

	<!-- footer -->
	<?php include("includes/footer.php") ?>
</body>

</html>