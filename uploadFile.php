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
            if (isset($_FILES['image'])) {
                $filename = $_FILE['image']['name'];
                $filetmp = $_FILE['image']['tmp_name'];
                move_uploaded_file($filetmp, "images/.$filename");
                echo "Images uploaded sucessfully";
            }

            ?>
            <form method="POST" action="" entype="multipart/form-data">
                <input type="file" name="image" />
                <input type="submit" value="submit" />

            </form>
        </div>

        <div class="footer">
            <h2>
                <?php echo "www.triningphp.com" ?>
            </h2>
        </div>
    </section>

</body>

</html>