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
            <table style="margin-left: auto; margin-right:auto; text-align:center">
            <h2>This is my chess board created using for loops and conditional if statements.</h2>
                <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
    ?>
            </table>
        </div>
        <footer>
            <div id="footer">
                <p><?php include "footer.php";?></p>
            </div>
        </footer>
    </div>
</body>

</html>