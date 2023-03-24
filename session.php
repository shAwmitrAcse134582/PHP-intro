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
            <?php
            $_session['user'] = "Shawmitra";
            $_session['password'] = "12346";

            echo "username is " . $_session['user'] . "<br/>";
            echo "password is " . $_session['password'] . "<br/>";


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