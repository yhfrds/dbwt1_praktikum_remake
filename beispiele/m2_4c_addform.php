<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addieren</title>
</head>
<body>
<form method="post">
    <input type="number" id="a" name="a" required> + <input type="number" id="b" name="b" required> =
    <span>
        <?php
        require_once 'm2_4a_standardparameter.php';
        if (isset($_POST['a']) && isset($_POST['b'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $result = addieren($a, $b);
            echo $result;
        }
        ?>
    </span>
    <br><br>
    <input type="number" id="a" name="a" required> x <input type="number" id="b" name="b" required> =
    <span>
        <?php
        require_once 'm2_4a_standardparameter.php';
        if (isset($_POST['a']) && isset($_POST['b'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $result = $a * $b

            ;
            echo $result;
        }
        ?>
    </span>
    <br><br>
    <input type="submit" value="Addieren">
</form>

</body>
</html>
