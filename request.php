<?php
$fonts = "arial";
$fontscolor = "#FCBC41";
?>
<!DOCTYPE html>

<head>
    <title>Php coding</title>
    <style>
        body {
            font-family:
                <?php echo $fonts;
                ?>
            ;
        }

        .phpCode {
            width: 100%;
            background: #ddd;
            margin: 0 auto;
        }

        .main {
            min-height: 600px;
            text-align:
                <?php echo "center" ?>

        }

        .header,
        .footer {
            background:
                <?php echo "#444" ?>
            ;
            color:
                <?php
                echo $fontscolor;
                ?>
            ;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>
    <section class="phpCode">
        <div class="header">
            <h2>PHP fundamental training</h2>
        </div>
        <div class="main">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                username: <input type="text" name="username" />
                <input type="submit" value="submit">
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_REQUEST['username'];
                if (empty($name)) {
                    echo "Username field must not be empty!!";
                } else {
                    echo "You have submitted: " . $name;
                }
            }

            ?>
        </div>

        <div class="footer">
            <h2>
                <?php echo "www.triningphp.com" ?>
            </h2>
        </div>
    </section>

</body>

</html>