<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
</head>
<body>
    <h4>Użytkownicy</h4>
    <?php
        require_once "../scripts/connect.php";
        //echo $conn->connect_errno;
        $sql = "SELECT * FROM `users`;";
        $result = $conn->query($sql);
        //$user = $result->fetch_all();
        //$user = $result->fetch_assoc();
        //echo $user["firstName"]."<hr>";
        //print_r($user);
        while($user = $result->fetch_assoc()){
            $year = substr($user["birthday"], 0 , 4);
            echo <<< USERS
                Imię i nazwisko: $user[firstName] $user[lastName]<br>
                Data urodzenia: $user[birthday]<br>
                Rok urodzenia: $year
                <hr>
            USERS;
        }
    ?>
</body>
</html>