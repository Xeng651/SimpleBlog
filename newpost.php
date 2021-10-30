<?php require_once("includes/head_section.php") ?>
<title> Add New Post </title>
<style>
    .add_form {
        margin: auto;
        position: relative;
        top: 20px;
        width: 800px;
        border: 1px solid black;
        padding: 50px;
    }

    input {
        width: 100%;
    }

    textarea {
        width: 100%;
        height: 300px;
        font-size: 15px;
    }

    h1 {
        text-align: center;
        background-color: forestgreen;
        color: whitesmoke;
        width: 100%;
    }

    .submit_1 {
        width: 100px;
        height: 50px;
        background-color: forestgreen;
        cursor: pointer;
    }

    input[type="submit"] {
        color: whitesmoke;
        font-size: 15px;
    }

    .submit_1:hover {
        background-color: darkgreen;
    }

    input[type="text"]#title {
        padding: 10px;
        font-size: 15px;
    }

    input[type="text"]#tag {
        padding: 5px;
        font-size: 15px;
    }

    .container {
        min-height: calc();
    }
</style>
</head>

<body>
    <!-- Page content -->
    <div class="container">
        <!-- navbar -->
        <?php include("includes/navbar.php") ?>

        <div class="content">
            <!-- Add New Post Form -->
            <div class="add_form">
                <h1> Add Post </h1> <br>
                <form action="home.php" method="POST">
                    <label for="title"> Title: </label> <br>
                    <input type="text" id="title" name="title" /> <br><br>
                    <label for="content"> Content: </label> <br>
                    <textarea id="content" name="content"> </textarea> <br><br>
                    <label for="tag"> Tag: </label> <br>
                    <input type="text" id="tag" name="tag" />
                    <input type="submit" name="submit" value="Publish" class="submit_1" />
                </form>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include("includes/footer.php") ?>

</body>

</html>