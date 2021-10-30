<?php require_once("includes/head_section.php") ?>
	<title> Profile </title>
</head>
<body>
	<div class="container">
		<!-- navbar -->
		<?php include("includes/navbar.php") ?>
		<!-- /navbar -->

		<!-- Page content -->
		<div class="content">
			<h2 class="content-title"> </h2>
			<hr>
			<!-- more content still to come here ... -->
		</div>

		<!-- /Page content -->

        <!-- profile -->
        <h1> Username goes here </h1>
        
        <figure>
        <img src="images/profile.jpg" alt="profile">
        </figure>

        <form action ="upload.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
        <label for="the_file"> Upload a file:</label>
        <input type="file" name="the_file" id="the_file"/>
        <input type="submit" value="Upload File"/>
        </form>

        <div class="description">
            <h2 class="description"> Description about user: </h2>
        </div>
        <!-- profile -->

        <!-- User posts -->
        <div class="post">
            <h3 class="post"> User's Posts: </h3>
        </div>
            <!-- All of User posts go here-->
        <!-- User posts -->


<!-- footer -->
<?php include("includes/footer.php") ?>
<!-- /footer -->

<!-- 

source: 
https://codewithawa.com/posts/how-to-create-a-blog-in-php-and-mysql-database 
https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_search_button

pictures: 
https://favpng.com/png_view/naver-blog-naver-blog-logo-png/UVsAuYHZ
https://www.pinclipart.com/pindetail/owJmT_magnifying-glass-icons-free-icons-in-rrze-magnifying/

-->