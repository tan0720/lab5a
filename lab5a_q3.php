<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>

<body>
    <?php
        function calculateArea($length, $width) {
            $area = $length * $width;
            return $area;
        }

        $length = 4;
        $width = 2;

        $area = calculateArea($length, $width);

        echo "The area of a rectangle with length $length and width $width is $area";
    ?>
</body>
</html