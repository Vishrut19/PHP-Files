<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form action="" method="post">
        What is your grade ?
        <input type="text" name="grade">
        <input type="submit">
    </form>

    <?php
        $grade = $_POST["grade"];
        switch ($grade) {
            case "A":
                echo "Outstanding";
                break;
            case "B":
                echo "Good";
                break;
            case "F":
                echo "Fail";
                break;
            default:
                echo "Wrong Input";
                break;
        }
    ?>
</body>
</html>