<?php
session_start();

$invalid_login = False;
$_SESSION["valid_login"] = False;

$error = "";
if (isset($_POST['user']) && isset($_POST['password'])) {
    $_SESSION["user"] = $user = $_POST["user"];
    $_SESSION["password"] = $password = $_POST["password"];

    include 'db_config.php';

    if ($conn == FALSE) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM adminusers WHERE username LIKE '$user' AND password LIKE '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) == 0) {
        $invalid_login = True;
        echo "<script type='text/javascript'>alert('Invalid Login!');</script>";
    } else if ($row["Username"] == $user) {
        if ($row["password"] == $password) {
            $_SESSION["valid_login"] = True;
        } else {
            $invalid_login = True;
        }
    }

    if ($_SESSION["valid_login"]) {
        $adminID = $row["AdminID"];
        $date = date("Y-m-d");
        $sql = "UPDATE adminusers SET Lastlogin = '$date' WHERE AdminID = $adminID";
        mysqli_query($conn, $sql);
        $_SESSION["AdminID"] = $adminID;
        $_SESSION["AdminLevel"] = $row["AdminLevel"];
        $_SESSION["Lastlogin"] = $row["Lastlogin"];
        mysqli_close($conn);
        header('Location: internal.php');
    }
}
?>

<!DOCTYPE html>
<html>
<title>WP Eatery - Home</title>
<link href="./css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./StyleSheet.css">

<body class="home">
    <div id="wrapper">
        <div id="header">
            <p><?php include "header.php"; ?></p>

        </div>
        <div id="content">

            <body>
                <!-- MESSAGES -->
                <?php
                //Missing username/password
                if ($missingFields) {
                    echo '<h3 style="color:red;">Please enter both a username and a password</h3>';
                }

                //Authentication failed
                if (isset($websiteUser)) {
                    if (!$websiteUser->isAuthenticated()) {
                        echo '<h3 style="color:red;">Login failed. Please try again.</h3>';
                    }
                }
                ?>

                <form name="login" id="login" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <table>
                        <tr>
                            <td>Username:</td>
                            <td><input type="text" name="username" id="username"></td>
                        </tr>
                        <tr>
                            <td>password:</td>
                            <td><input type="password" name="password" id="password"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" id="submit" value="Login"></td>
                            <td><input type="reset" name="reset" id="reset" value="Reset"></td>
                        </tr>
                    </table>
                    <?php echo '<p>Session ID: ' . session_id() . '</p>'; ?>
                </form>
            </body>



        </div><!-- End Content -->

        <div id="footer">
            <p><?php include "footer.php"; ?></p>
        </div>
    </div>
</body>

</html>