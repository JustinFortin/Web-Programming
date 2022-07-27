<?php include("db_config.php");

function checkInput($data)
{
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = checkInput($_POST["firstName"]);
    $lastName = checkInput($_POST["lastName"]);
    $emailAddress = checkInput($_POST["emailAddress"]);
    $phoneNumber = checkInput($_POST["phoneNumber"]);
    $userName = checkInput($_POST["userName"]);
    $referrer = checkInput($_POST["referrer"]);

    $sql = "INSERT INTO mailingList (firstName, lastName, emailAddress, phoneNumber, userName, referrer) VALUES ('$firstName', '$lastName', '$emailAddress', '$phoneNumber', '$userName', '$referrer')";

    $conn->query($sql);
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


            <h1>Sign up for our newsletter</h1>
            <p>Please fill out the following form to be kept up to date with news,<br>
                specials, and promotions from the WP eatery!</p>
            <form name="frmNewsletter" id="frmNewsletter" method="post">
                <table>
                    <tr>
                        <td>First Name:</td>
                        <td><input type="text" name="firstName" id="firstName" size='40'></td>
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td><input type="text" name="lastName" id="lastName" size='40'></td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td><input type="text" name="phoneNumber" id="phoneNumber" size='40'></td>
                    </tr>
                    <tr>
                        <td>Email Address:</td>
                        <td><input type="text" name="emailAddress" id="emailAddress" size='40'>
                    </tr>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="userName" id="userName" size='20'>
                    </tr>
                    <tr>
                        <td>How did you hear<br> about us?</td>
                        <td>
                            <select name="referrer" size="1">
                                <option>Select referrer</option>
                                <option value="newspaper">Newspaper</option>
                                <option value="radio">Radio</option>
                                <option value="tv">Television</option>
                                <option value="other">Other</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2'><input type='submit' name='btnSubmit' id='btnSubmit' value='Sign up!'>&nbsp;&nbsp;<input type='reset' name="btnReset" id="btnReset" value="Reset Form"></td>
                    </tr>
                </table>
            </form>

        </div><!-- End Content -->

        <div id="footer">
            <p><?php include "footer.php"; ?></p>
        </div>
    </div>
</body>

</html>