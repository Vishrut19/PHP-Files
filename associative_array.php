<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <form action="associative_array.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>

    <?php
        $grades = array("Jim" => "A+","Tim"=>"A","Dick"=>"B+");
        echo $grades[$_POST["student"]];
    ?>  
</body>
</html>