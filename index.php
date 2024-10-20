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
    <main class="zawijanie">
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

            $dane = "SELECT * FROM matematyka";

            $wynik = mysqli_query($polaczenie, $dane);

            while ($matematyka = mysqli_fetch_assoc($wynik)) {
                echo "<tr><td>" . $matematyka['ID'] . "</td><td>" . $matematyka['Imie'] . "</td><td>" . $matematyka['Nazwisko'] . "</td><td>" . $matematyka['Ocena'] . "</td></tr>";
            }

            mysqli_close($polaczenie);
            ?>
        </table>
    </main>
    <aside>
        <nav>
            <h2>Nawigacja</h2>
            <ul>
                <li class="obecnastrona">
                    <a href="./index.php">Matematyka</a>
                </li>
                <li>
                    <a href="./polski.php">J. Polski</a>
                </li>
                <li>
                    <a href="./dodawanie.php">Dodawanie ocen</a>
                </li>
            </ul>
        </nav>
    </aside>
    <footer>
        <a href="https://zsz.bobowa.pl/" target="blank">zsz.bobowa.pl</a>
    </footer>
</body>

</html>