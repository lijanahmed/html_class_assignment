<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>here will satart the "php code" </h1><br>
    <?php
        echo "This will calculate : "; <br>

        $a = 40;
        $b = 50;

        echo "sum : ". $a+$b; <br>
        echo " sub: ". $a-$b; <br>
        echo " product : ". $a*$b; <br>
        echo " div : ". $a/$b;  

    <form action="/PHP_BEGINER/SECOND_PAGE.php"  method="GET">

        <label for=""> First Name</label>
        <input type="text" placeholder="First Name" name="first_name" required>
        <br>
        <label for=""> Last  Name</label>
        <input type="text" placeholder="Last Name" name="last_name" required>
        <br>

        <label for=""> Value 1</label>
        <input type="number" placeholder="Value 1" name="value_1" required>
        <br>
        <label for=""> Value 2</label>
        <input type="number" placeholder="Value 2" name="value_2" required>
        <br>
        <input type="submit" value="Submit">
        <br>

    </form>
    ?>
</body>
</html>