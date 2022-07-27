<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="StyleSheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Lab 6</title>
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
                <h2>This displays a pattern using a loop with conditional statements.</h2>
                <?php
				for ($loop=0;$loop<5;$loop++) {
					if ($loop==0||$loop==4) {
						echo "*****";
					} else {
						echo "*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*";
					}
                    echo "<br>";
                }
                    ?>
        </div>
        <footer>
            <div id="footer">
                <p><?php include "footer.php";?></p>
            </div>
        </footer>
    </div>
</body>

</html>