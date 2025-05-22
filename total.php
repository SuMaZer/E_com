<?php

function addTwoNumbers($a, $b)
{
    return $a + $b;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $total = addTwoNumbers(200, 4000);
    echo "Total value is $total";
    ?>
</body>

</html>