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
        <h2>J. Polski</h2>
        <section>
            <?php
            $polaczenie = mysqli_connect('localhost', 'root', '', 'szkola');

            $dane = "SELECT * FROM uczen";

            $wynik = mysqli_query($polaczenie, $dane);

            while ($uczen = mysqli_fetch_assoc($wynik)) {
                echo "<div class='bloczki'> Nr. " . $uczen['ID'] . "<br>Imię: " . $uczen['Imie'] . "<br>Nazwisko: " . $uczen['Nazwisko'] . "<br>Ocena: " . $uczen['Ocena'] . "</div>";
            }
            mysqli_close($polaczenie);
            ?>
        </section>
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