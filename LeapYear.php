<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
        $leapyear = 2084; 


        if (($leapyear % 4 == 0 && $leapyear % 100 != 0) || ($leapyear % 400 == 0)) {
            echo $leapyear . " is a leap yearrrrr!";
        }

        else {
            echo $leapyear . " is not a leap yearrrrr!";
        }

    ?>
</body>
</html>