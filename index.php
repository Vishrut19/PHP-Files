<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <form action="index.php" method="get">
        Name : <input type="text" name="name">
        <input type="submit">
    </form>

    <?php
        echo $_GET["name"]; 
    ?>
</body>
</html>