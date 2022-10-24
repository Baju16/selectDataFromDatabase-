<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyciąganie danych z tabeli</title>
    <style>
        table,td, th{
            border:1px solid black;
            border-collapse:collapse;
        }
    </style>
</head>
<body>
    <?php
        $połączenie = mysqli_connect('localhost', 'root', '','baza_danych');
        
        $zapytanie = "SELECT * FROM klient";

        $wynik = mysqli_query($połączenie, $zapytanie);
            echo "<table><tr><th>Id</th><th>Imię</th><th>Nazwisko</th><th>Data</th><th>Pesel</th></tr>";
            while($row = mysqli_fetch_array($wynik)){
                echo "
                <tr><td>$row[Id]</td> 
                <td>$row[Imię]</td> 
                <td>$row[Nazwisko]</td> 
                <td>$row[Data]</td> 
                <td>$row[Pesel]</td><tr>";
            }
            echo "</table>";
        mysqli_close($połączenie);
    ?> 
</body>
</html>