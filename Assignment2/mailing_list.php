<?php
include("db_config.php");
if ($result = $conn->query("SELECT * FROM mailingList"))
  echo '<!-- TABLE QUERIED-->'; {
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<table>";
      echo "<tr>";
      echo "<th>Full Name</th>";
      echo "<th>Email Address</th>";
      echo "<th>Phone</th>";
      echo "</tr>";
      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['firstName'] . " " . $row['lastName'] . "</td>";
        echo "<td>" . $row['emailAddress'] . "</td>";
        echo "<td>" . $row['phoneNumber'] . "</td>";
        echo "</tr>";
      }
    }
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

      <h1>Mailing List</h1>
      <table border="1" width=80%>

        <tr>
          <th>Full Name</th>
          <th>Email</th>
          <th>Phone Number</th>
        </tr>
      </table>



    </div><!-- End Content -->

    <div id="footer">
      <p><?php include "footer.php"; ?></p>
    </div>
  </div>
</body>

</html>