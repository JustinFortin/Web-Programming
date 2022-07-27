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
                <h2>This displays all prime numbers within a specified range.</h2>
                <?php
    error_reporting(0);		
    $a=$_POST['lower'];
    $b=$_POST['upper'];	
    if(isset($_POST['clear']))
    {
    $a="";
    $b="";
    }	
    ?>		
    <br>
    <h3>Range in Prime Numbers</h3>
    <form method="post" action="prime.php" name="prime_me">
    Lowest number &nbsp;&nbsp;<input type="text" name="lower" 
    	 size="5" value="<?php echo $a; ?>" autofocus>
    &nbsp;&nbsp;&nbsp;&nbsp; 	 	 
     Highest number &nbsp;&nbsp;<input type="text" name="upper" 
    	 size="5" value="<?php echo $b; ?>">
    <br><br>
    <input type="submit" name="check" value="Ok">
    &nbsp;&nbsp;&nbsp;&nbsp; 	 	 	
    <input type="submit" name="clear" value="Clear">
    </form>
    	<h3>All prime numbers between entered numbers: </h3>
    <?php
    if(isset($_POST['check']))
    {
    $a=$_POST['lower'];
    $b=$_POST['upper'];
    $flag=0;
    for($a;$a<$b;$a++)
    {
    for($j=2;$j<$a;$j++)
    {
    if($a%$j==0)
    {
    $flag=1;
    }
    }
    if($flag==0)
    {
    echo " ".$a." ";
    }
    $flag=0;
    }
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