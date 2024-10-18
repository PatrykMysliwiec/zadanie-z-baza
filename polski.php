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
        <h2>J. Polski</h2>
        <section>
            <?php
            $polaczenie = mysqli_connect('localhost', 'root', '', 'szkola');

            $dane = "SELECT * FROM jpolski";

            $wynik = mysqli_query($polaczenie, $dane);

            while ($jpolski = mysqli_fetch_assoc($wynik)) {
                echo "<div class='bloczki'> Nr. " . $jpolski['ID'] . "<br>Imię: " . $jpolski['imie'] . "<br>Nazwisko: " . $jpolski['nazwisko'] . "<br>Ocena: " . $jpolski['ocena'] . "</div>";
            }
            mysqli_close($polaczenie);
            ?>
        </section>
    </main>
    <aside>
        <h2>Nawigacja</h2>
        <ul>
            <li>
                <a href="./index.php">Matematyka</a>
            </li>
            <li>
                J. Polski
            </li>
            <li>
                <a href="./dodawanie.php">Dodawanie ocen</a>
            </li>
        </ul>
    </aside>
    <footer>
        <a href="https://zsz.bobowa.pl/" target="blank">zsz.bobowa.pl</a>
    </footer>
</body>

</html>