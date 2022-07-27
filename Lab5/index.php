<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./StyleSheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Lab 5</title>
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
            <p>
                <?php			
                $firstName = "Justin-Thomas";
                $middleName = "Brian";
                $lastName = "Warkus-Fortin";
                define("STUDENTNUMBER", "040966794");
                echo $firstName . " ". $middleName. " " . $lastName . "<br>";
                echo "Student Number: " . STUDENTNUMBER . "<br>";
                echo "Hello World!!" . " This is the first time I am using PHP!!";
                ?>
            </p>
        </div>
        <footer>
            <div id="footer">
                <p><?php include "footer.php";?></p>
            </div>
        </footer>
    </div>
</body>

</html>