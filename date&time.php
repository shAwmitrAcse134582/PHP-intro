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
            echo "Today is " . date("d/m/Y") . "<br/>";
            echo "Today is " . date("l") . "<br/>";
            echo "Default Time is " . date("h:i:sa") . "<br/>";


            date_default_timezone_set('Asia/Dhaka');
            echo "Bangladesh Time is " . date("h:i:sa") . "<br/>";
            echo date_default_timezone_get() . "<br/>";



            ?>
        </div>

        <div class="footer">
            <p>&copy:
                <?php
                echo date("Y");
                ?>
                shawmitra
            </p>
            <h2>
                <?php echo "www.triningphp.com" ?>
            </h2>
        </div>
    </section>

</body>

</html>