<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<title>Lista</title>
<body>
    <ul type="square">
        <li>Wielkopolska
            <ol type="1">
                <li>Poznań</li>
                <li>Gniezno</li>
            </ol>
        </li>
        <li>Dolnośląskie</li>
        <li>Zachodniopomorskie</li>
            <ol>
                <li>Stargard</li>
            </ol>
    </ul>

    <?php
        //require, require_once, include, include_once
          include "./scripts/list.php";
          include_once "./scripts/list.php";
          require "./scripts/list.php";
          require_once "./scripts/list.php";
    ?>
    <h4>Kod po skrypcie</h4>
</body>
</html>