<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <h1>Dziennik</h1>
    </header>
    <main>
        <h2>Matematyka</h2>
        <table>
            <tr>
                <th>Nr</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Ocena</th>
            </tr>
            <?php
            $polaczenie = mysqli_connect('localhost', 'root', '', 'szkola');

            $dane = "SELECT * FROM uczen";

            $wynik = mysqli_query($polaczenie, $dane);

            while ($uczen = mysqli_fetch_assoc($wynik)) {
                echo "<tr><td>" . $uczen['ID'] . "</td><td>" . $uczen['Imie'] . "</td><td>" . $uczen['Nazwisko'] . "</td><td>" . $uczen['Ocena'] . "</td></tr>";
            }

            mysqli_close($polaczenie);
            ?>
        </table>
    </main>
    <aside>
        <ul>
            <li>
                Matematyka
            </li>
            <li>
                J. Polski
            </li>
            <li>
                J. Angielski
            </li>
        </ul>
    </aside>
    <footer>
        <a href="https://zsz.bobowa.pl/" target="blank">zsz.bobowa.pl</a>
    </footer>
</body>

</html>