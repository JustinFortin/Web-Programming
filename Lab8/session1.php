<?php
session_start();

if (isset($_POST["submit"])) {

    $_SESSION["employeeName"] = $_POST["employeeName"];
    $_SESSION["id"] = $_POST["employeeId"];
    $_SESSION["phoneNumber"] = $_POST["telephoneNumber"];
    $_SESSION["emailAddress"] = $_POST["emailAddress"];
    $_SESSION["Category"] = $_POST["Category"];
    $_SESSION["Projects"] = $_POST["Projects"];

    header("Location:session2.php");
    exit;
}

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="StyleSheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Session 1</title>
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

            <form method="post" action="session2.php">
                Employee Name:
                <input type="text" name="employeeName" value="">
                <br><br>
                Employee ID:
                <input type="text" name="employeeID" value="">
                <br><br>
                Phone Number:
                <input type="text" name="phoneNumber" value="">
                <br><br>
                Email Address:
                <input type="text" name="emailAddress" value="">
                <br><br>

                <input type="radio" name="Category" value="Manager">
                Manager |
                <input type="radio" name="Category" value="Team Lead">
                Team Lead |
                <input type="radio" name="Category" value="IT Developer">
                IT Developer |
                <input type="radio" name="Category" value="IT Analyst">
                IT Analyst

                <br><br>
                IT Projects:
                <select name="Projects">
                    <option value="Nothing Selected">Please Select</option>
                    <option value="Project A">Project A</option>
                    <option value="Project B">Project B</option>
                    <option value="Project C">Project C</option>
                    <option value="Project D">Project D</option>
                </select>

                <br><br>
                <input type="submit" value="Submit Information" />
            </form>
            <h3>
                <?php

                if (isset($_POST["employeeName"]))
                    $employeeName = $_POST["employeeName"];
                else
                    $employeeName = "";

                if (isset($_POST["employeeID"]))
                    $id = $_POST["employeeID"];
                else
                    $id = "";

                if (isset($_POST["phoneNumber"]))
                    $phoneNumber = $_POST["phoneNumber"];
                else
                    $phoneNumber = "";

                if (isset($_POST["emailAddress"]))
                    $emailAddress = $_POST["emailAddress"];
                else
                    $emailAddress = "";

                if (isset($_POST["Category"]))
                    $Category = $_POST["Category"];
                else
                    $Category = "";

                if (isset($_POST["Project"]))
                    $Project = $_POST["Project"];
                else
                    $Project = "";

                ?>
            </h3>
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