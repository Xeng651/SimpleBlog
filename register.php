<!DOCTYPE html>

<?php

if (isset($_POST["action"])) {
    if ($_POST['action'] == "Cancel") {
        header("Location: about.php");
    }
}

?>

<html>
<title> Registration Blog </title>

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
            right: 0;
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
            top: 23%;
            left: 35%;
        }

        input[type="submit"] {
            color: whitesmoke;
        }

        input[type="text"] {
            width: 300px;
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
            color: forestgreen;
            position: relative;
            top: 100px;
            left: 640px;
            color: black;
        }

        .subheading {
            position: relative;
            left: 20px;
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

    <div class="heading">
        <h1> Create your account </h1>
        <p class="subheading"> Already have an account? <a href="login.php"> Login here </a> </p>
    </div>

    <div class="sign_up_form">
        <table>
            <form action="" method="POST">
                <tr>
                    <td colspan="2" class="table_title">Account Set-Up</td>
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
                    <td><input type="submit" name="action" value="Register" class="submit_1"></td>
            </form>
            </tr>
        </table>

    </div>
    <?php include("includes/footer.php") ?>

</body>

</html>
