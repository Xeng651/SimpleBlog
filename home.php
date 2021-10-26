<?php require_once("includes/head_section.php") ?>
<title> Simple Blog </title>
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

		<!-- footer -->
		<?php include("includes/footer.php") ?>

</body>

</html>

<!-- 

source: 
https://codewithawa.com/posts/how-to-create-a-blog-in-php-and-mysql-database 
https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_search_button

pictures: 
https://favpng.com/png_view/naver-blog-naver-blog-logo-png/UVsAuYHZ
https://www.pinclipart.com/pindetail/owJmT_magnifying-glass-icons-free-icons-in-rrze-magnifying/

-->
