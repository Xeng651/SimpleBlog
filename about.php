<html>
<style>
    .logo img{
	position: absolute;
	margin-left: 10px;
    margin-top: 0px;
	height: 100px;
	width: 120px;
	float: left;
	background-color: beige;
}
.goto_create {
    position: absolute;
    top: 35%;
    left: 41%;

}
.goto_login{
    position: absolute;
    top: 3%;
    right: 2%;
}
a:link{
    color: whitesmoke;
    display: block; 
    width: 200px; 
    height: 50px; 
    background-color: forestgreen;
    box-sizing:border-box;
    text-align: center;
    font-size: 23px;
}
a:visited {
  color: whitesmoke;
  display: block; 
    width: 200px; 
    height: 50px; 
    background-color: forestgreen;
    box-sizing:border-box;
    text-align: center;
}
body{
    background-color: beige;
}
a {
    text-decoration: none;
    padding-top: 10px;
}
.text{
    position:absolute;
    top: 17%;
    left: 28%;
    color: #787276;
}
.text2{
    position: absolute;
    top: 300px;
    left: 29%;
    border-bottom: 2px dotted grey;
}
.title_text{
    font-size: 50px;
}
.deco_text{
    color: #787276;
    font-size: 17px;
}
.img_dec_zone{
    height: 100px;
    width: 70%;
    position: absolute;
    bottom: 30%;
    left: 15%;
    background-color: beige;
}
.img_1{
width: 300px;
height: 200px;
}
.img_2{
width: 300px;
height: 200px;
padding-left: 70px;
}
.img_3{
width: 300px;
height: 200px;
padding-left: 70px;
}
.footer {
  	position: absolute;
  	bottom: 0;
  	color: white;
  	background-color: green;
  	text-align: center;
  	width: 100%;
  	padding: 5px;
}


</style>
    <head>
        

    </head>
    <body>
         <!--
            logo slot
        -->
        <div class="logo">
        <img src="images/logo.png" alt="logo">
        </div>

         <!--
            sign-up button
        -->
        <div class="goto_create">
                <a href="create_login.php">Get Started</a>
        </div>
         <!--
            login button
        -->
        <div class="goto_login">
            <a href="sign_in.php">Sign in</a>
        </div>

         <!--
            Big text above sign-up button
        -->
        <div class="text">
            <h1 class="title_text">Create your own blog for free!</h1>
        </div>


         <!--
            small text under sign-up button
        -->
        <div class="text2">
            <p class="deco_text">Get started by signing up now! Share your experience, news, or anything on your mind at all!</p>
        </div>
        <!--
            img slots
        -->
        <div class="img_dec_zone">
            <img src="images/empty_img.jpg" alt="img_slot_1" class="img_1">
            <img src="images/empty_img.jpg" alt="img_slot_2" class="img_2">
            <img src="images/empty_img.jpg" alt="img_slot_3" class="img_3">
        </div>

        <?php include("includes/footer.php") ?>
    </body>
</html>