<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: beige;
        }

        .footer {
            position: absolute;
            bottom: 0;
            right: 0;
            color: white;
            background-color: forestgreen;
            text-align: center;
            width: 100%;
            padding: 5px;
        }

        table,
        .input {
            border: 1px solid black;
        }

        .table_title {
            text-align: center;
            background-color: forestgreen;
            color: whitesmoke;
        }

        .lables {
            background-color: forestgreen;
            color: whitesmoke;
        }

        .sign_up_form {
            position: absolute;
            top: 30%;
            left: 45%;
        }

        input[type="submit"] {
            color: whitesmoke;
        }

        .submit_1 {
            position: relative;
            right: 5px;
            background-color: forestgreen;
        }

        .submit_2 {
            background-color: forestgreen;
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
    </style>
</head>

<body>
    <!--
            logo slot
        -->
    <div class="logo">
        <img src="images/logo.png" alt="logo">
    </div>

    <div class="sign_up_form">
        <table>
            <form action="" method="POST">
                <tr>
                    <td colspan="2" class="table_title">Login Information</td>
                </tr>
                <tr>
                    <td class="lables">Email:</td>
                    <td class="input"><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td class="lables">Password</td>
                    <td class="input"><input type="password" name="login_pass"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="action" value="Cancel" class="submit_2"></td>
                    <td><input type="submit" name="action" value="Register" class="submit_1"></td>
            </form>
            </tr>
        </table>

    </div>
    <?php include("includes/footer.php") ?>

</body>

</html>
