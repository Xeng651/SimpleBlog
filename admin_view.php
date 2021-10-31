<!DOCTYPE html>
<?php require_once("includes/head_section.php") ?>
<title> Admin Page </title>
<html>
    <head>
<style>
.ReportTable{
    border-radius: 9px;
    position: absolute;
    top: 150px;
    left: 50px;
    width: 20%;
    background-color:cornflowerblue;
    
}
.ReportTable, th, tr, .blogtable{
    border: 2px solid black;
    text-align: center;
    
}
.blogtable{
    border-radius: 9px;
    position: absolute;
    top: 150px;
    left: 500px;
    width: 20%;
    background-color:cornflowerblue;
}
	
th, td{
    background-color: whitesmoke;
    font-size: 15px;
}
tr{
    border-collapse: collapse;
}
td{
    font-size: 15px;
    
}
.DelAccount{
    position: absolute;
    top: 150px;
    right: 50px;
    border: 2px solid black;
    background-color: forestgreen;
}
.EditAccount{
    position: absolute;
    top: 190px;
    right: 68px;
    border: 2px solid black;
    background-color: forestgreen;
}
label {
    font-size: 20px;
}
.SelectUser{
    position: absolute;
    top: 230px;
    right: 53px;
    border: 2px solid black;
    background-color: forestgreen;
}

</style>
</head>
    <body>
    <div class="container">
		<!-- navbar -->
		<?php include("includes/navbar.php") ?>
		
        <div class="reportTab">
        <table class="ReportTable">
            <th>Users</th>
            <!--
            put the code responsible for user ID here. 
            -->
            <?php
            echo"<tr> <td>test ID</td></tr>";
            ?>
            
        </table>
        </div>

        <div class="bloglist">
            <table class="blogtable">
            <th>Blog ID</th>
             <!--
            put the code responsible for user's blog ID here. 
            -->
            <?php
            echo"<tr> <td>test Blog ID</td></tr>";
            ?>
            </table>
        </div>

        <div class="DelAccount">
            <form action="" method="POST">
                <label for="userID">UserID:</label>
                <input type="text" name="userID">
                <input type="submit" name="submit" value="Delete">
            </form>
        </div>
        <div class="EditAccount">
            <form action="" method="POST">
                <label for="editBlog">BlogID:</label>
                <input type="text" name="editBlog">
                <input type="submit" name="submit" value="Edit">
            </form>
        </div>
        <div class="SelectUser">
            <form action="" method="POST">
                <label for="">UserID:</label>
                <input type="text" name="userID">
                <input type="submit" name="select" value="Select">
            </form>
        </div>

		<!-- Page content -->
		<div class="content">
			<table class="table_1">

			</table>
		</div>

	</div>

	<!-- footer -->
	<?php include("includes/footer.php") ?>
    </body>
</html>