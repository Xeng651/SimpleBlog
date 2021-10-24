<html>
<style>
    body{
        background-color: beige;
    }
    .footer {
  	position: absolute;
  	bottom: 0;
      right: 0%;
  	color: white;
  	background-color: green;
  	text-align: center;
  	width: 100%;
  	padding: 5px;
}
table, .input{
    border: 1px solid black;
}
.table_title{
    text-align: center;
    background-color: forestgreen;
    color: whitesmoke;
}
.lables{
    background-color: forestgreen;
    color: whitesmoke;
}
.sign_up_form{
    position: absolute;
    top: 30%;
    left: 40%;
}
input[type="submit"]{
    color: whitesmoke;
}
.submit_1{
    background-color: forestgreen;
}
.submit_2{
    background-color: crimson;
}
</style>
<body>
    <div class="sign_up_form">
        <table>
            
        <form action="" method="POST">
            <tr><td colspan="2" class="table_title">Account Information</td></tr>
            <tr>
            <td class="lables">Email:</td>
            <td class="input"><input type="text" name="email" required></td>
            </tr>
            <tr>
            <td class="lables">Password</td>
            <td class="input"><input type="password" name="first_pw" required></td>
            </tr>
            <tr>
            <td class="lables">Re:Password</td>
            <td class="input"><input type="password" name="second_pw" required></td>
            </tr>
            <tr><td><input type="submit" name="create" value="Create" class="submit_1"></td></form>
        <form action="about.php" method="get">
            <td><input type="submit" name="cancle" value="Cancle" class="submit_2"></td>
        </form>
        </tr>
        </table>

    </div>
    <?php include("includes/footer.php") ?>

</body>
</html>