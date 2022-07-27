<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="StyleSheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Session 2</title>
</head>

<body>
    <div id="container">
        <header>
            <div id="header">
                <h1>
                    <?php include "header.php"; ?>
                </h1>
                <div id="menu">
                    <?php include "menu.php"; ?>
                </div>
            </div>
        </header>
        <div id="content">

            <?php
            session_start();

            $_SESSION["employeeName"] = $_POST["employeeName"];
            $_SESSION["id"] = $_POST["employeeID"];
            $_SESSION["phoneNumber"] = $_POST["phoneNumber"];
            $_SESSION["emailAddress"] = $_POST["emailAddress"];
            $_SESSION["Category"] = $_POST["Category"];
            $_SESSION["Project"] = $_POST["Project"];

            if (isset($_SESSION["employeeName"])) {
                echo "<b>First Name: </b>" . $_SESSION['employeeName'];
                echo "<br />";
            }
            if (isset($_SESSION["id"])) {
                echo "<b>Employee id: </b>" . $_SESSION['id'];
                echo "<br />";
            }
            if (isset($_SESSION["phoneNumber"])) {
                echo "<b>Phone Number : </b>" . $_SESSION['phoneNumber'];
                echo "<br />";
            }
            if (isset($_SESSION["emailAddress"])) {
                echo "<b>Email : </b>" . $_SESSION['emailAddress'];
                echo "<br />";
            }
            if (isset($_POST["Category"])) {
                echo "<b>Type: </b>" . $_SESSION['Category'];
                echo "<br />";
            }

            if (isset($_POST["Project"])) {
                echo "<b>Project: </b>" . $_SESSION['Project'];
                echo "<br />";
            }

            ?>
        </div>
        <footer>
            <div id="footer">
                <div class="footer">
                    <p><?php include "footer.php"; ?></p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>