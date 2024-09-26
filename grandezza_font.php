<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grandezza font</title>
</head>
<body>
    <?php

    $grandezza = rand(16,60);

    echo "<p style = 'font-size: " . $grandezza . "px '>Questo paragrafo ha dimensione random </p>";



    ?>
</body>
</html>