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
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <table>
                    <tr>
                        <td>Name :</td>
                        <td><input type="text" name="name" /></td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td><input type="email" name="email" /></td>
                    </tr>

                    <tr>
                        <td>website :</td>
                        <td><input type="text" name="website" />
                        </td>
                    </tr>

                    <tr>
                        <td>comment :</td>
                        <td><textarea name="comment" rows="5" cols="40"></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>Gender :</td>
                        <td>
                            <input type="radio" name="gender" value="female">Female</input>
                            <input type="radio" name="gender" value="female">Male</input>
                        </td>

                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit">
                        </td>
                    </tr>
                </table>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = validate($_POST["name"]);
                $email = validate($_POST["email"]);
                $website = validate($_POST["website"]);
                $comment = validate($_POST["comment"]);
                $gender = validate($_POST["gender"]);

                echo "Name:" . $name . "<br/>";
                echo "email:" . $email . "<br/>";
                echo "website:" . $website . "<br/>";
                echo "comment:" . $comment . "<br/>";
                echo "gender:" . $gender . "<br/>";

            }
            function validate($data)
            {
                $data = trim($data);
                $data = stripcslashes($data);
                $data = htmlspecialchars($data);
                return $data;
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