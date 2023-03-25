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
            $str = "<h2>I am learning php<h2>";
            $newstr = filter_var($str, FILTER_SANITIZE_STRING);
            echo $newstr . "<br/>";

            $int = 30.6;
            if (filter_var($int, FILTER_VALIDATE_INT)) {
                echo "It is integer value";
            } else {
                echo "It is not Integer value";
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