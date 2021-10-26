<!DOCTYPE html>

<?php

if (isset($_POST["action"])) {
    if ($_POST['action'] == "Cancel") {
        header("Location: about.php");
    }
}

?>

<html>
<title> Login Blog </title>

<head>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        html {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: beige;
            position: relative;
            font-family: Arial;
            min-height: 100%;
            overflow: hidden;
            width: 100%;
        }

        .footer {
            position: absolute;
            bottom: 0;
            right: 0%;
            color: white;
            background-color: forestgreen;
            text-align: center;
            width: 100%;
            padding: 15px;
        }

        table,
        .input {
            border: 1px solid black;
        }

        .table_title {
            height: 100px;
            text-align: center;
            background-color: forestgreen;
            color: whitesmoke;
        }

        .labels {
            height: 50px;
            background-color: forestgreen;
            color: whitesmoke;
        }

        .sign_up_form {
            position: absolute;
            top: 20%;
            left: 35%;
        }

        input[type="text"] {
            width: 300px;
        }

        input[type="submit"] {
            color: whitesmoke;
        }

        .submit_1 {
            width: 100px;
            height: 50px;
            position: relative;
            right: 20px;
            top: 20px;
            background-color: forestgreen;
            cursor: pointer;
        }

        .submit_2 {
            position: relative;
            width: 100px;
            height: 50px;
            top: 20px;
            background-color: forestgreen;
            cursor: pointer;
        }

        .submit_2:hover,
        .submit_1:hover {
            background-color: darkgreen;
        }

        .logo img {
            position: absolute;
            margin-left: 10px;
            margin-top: 0px;
            height: 100px;
            width: 120px;
            float: left;
            background-color: beige;
        }

        table {
            width: 500px;
        }

        .submitrow {
            height: 100px;
        }

        .heading {
            position: relative;
            top: 100px;
            left: 620px;
            color: black;
        }

        .goto_create {
            position: relative;
            top: 10px;
            right: 10px;
            float: right;
        }

        .signuplink:link {
            color: whitesmoke;
            display: block;
            width: 150px;
            height: 50px;
            background-color: forestgreen;
            box-sizing: border-box;
            border-radius: 15px;
            text-align: center;
            font-size: 23px;
        }

        .signuplink:visited {
            color: whitesmoke;
            display: block;
            width: 200px;
            height: 50px;
            background-color: forestgreen;
            box-sizing: border-box;
            text-align: center;
        }

        .signuplink {
            text-decoration: none;
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <!--
            logo slot
        -->
    <div class="logo">
        <img src="images/logo.png" alt="logo">
    </div>

    <div class="goto_create">
        <a href="register.php" class="signuplink"> Sign Up </a>
    </div>

    <div class="heading">
        <h1> Log in to your account </h1>
    </div>

    <div class="sign_up_form">
        <table>
            <form action="" method="POST">
                <tr>
                    <td colspan="2" class="table_title">Login Information</td>
                </tr>
                <tr>
                    <td class="labels">Email:</td>
                    <td class="input"><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td class="labels">Password</td>
                    <td class="input"><input type="password" name="login_pass"></td>
                </tr>
                <tr class="submitrow">
                    <td><input type="submit" name="action" value="Cancel" class="submit_2"></td>
                    <td><input type="submit" name="action" value="Login" class="submit_1"></td>
                </tr>
            </form>
        </table>
    </div>
    <?php include("includes/footer.php") ?>

</body>

</html>
