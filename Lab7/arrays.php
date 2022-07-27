<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="StyleSheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Lab 7</title>
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
            <h2 style="color:aquamarine; text-align: center;">No key array - Output using var_dump</h2>

            <?php
            $noKeyArray = array(10, 20, 30, 40);
            echo "<pre style=\"text-align:center\">";
            var_dump($noKeyArray);
            echo "</pre>\n";
            ?>
            <h2 style="color:aquamarine; text-align: center;">No key array - Output using foreach</h2>
            <?php
            echo "<pre style=\"text-align:center\">";
            foreach ($noKeyArray as $key => $value) {
                $datatype = gettype($key);
                echo "key: $key, value: $value, key data type: $datatype.\n";
            }
            echo "</pre>\n";
            ?>

            <?php
            $stringKeyArray = array(
                "key1" => "item1",
                "key2" => "item2",
            );
            echo "<pre style=\"text-align:center\">";
            var_dump($stringKeyArray);
            echo "</pre>\n";
            ?>
            <?php
            $stringKeyArray = array(
                "key1" => "item1",
                "key2" => "item2",
            );
            echo "<pre style=\"text-align:center\">";
            var_dump($stringKeyArray);
            echo "</pre>\n";
            ?>
            <?php
            $stringKeyArray = array(
                "key1" => "item1",
                "key2" => "item2",
            );
            echo "<pre style=\"text-align:center\">";
            var_dump($stringKeyArray);
            echo "</pre>\n";
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