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
        <form id="formularz" action="dodawanie.php" method="POST">
            <h3>Dodawanie ocen do bazy</h3>
            <div class="dane">
                <label for="">Wybierz tabele</label>
                <select name="tabela" id="">
                    <?php
                    $polaczenie = mysqli_connect('localhost', 'root', '', 'szkola');

                    $zapytanie = "SHOW TABLES";

                    $result = mysqli_query($polaczenie, $zapytanie);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value="' . $row['Tables_in_szkola'] . '">' . $row['Tables_in_szkola'] . '</option>';
                    }

                    mysqli_close($polaczenie);
                    ?>
                </select>
            </div>
            <div class="dane">
                <label for="">Dodaj imię</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="dane">
                <label for="">Dodaj nazwisko</label>
                <input type="text" name="lastname" id="lastname">
            </div>
            <div class="dane">
                <label for="">Dodaj ocene</label>
                <input type="number" name="grade" id="grade">
            </div>
            <button value="dodaj" name="submit" type="sybmit">Prześlij dane do bazy</button>
        </form>
        <?php
        if (isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['grade'])) {
            $polaczenie = mysqli_connect('localhost', 'root', '', 'szkola');

            
            $imie = $_POST['name'];
            $nazwisko = $_POST['lastname'];
            $ocena = $_POST['grade'];
            $tabela = $_POST['tabela'];

            $dodajDane = "INSERT INTO `$tabela`(`imie`, `nazwisko`, `ocena`) VALUES ('$imie','$nazwisko','$ocena')";

            if (mysqli_query($polaczenie, $dodajDane)) {
                echo "<p class='wynik'>Dodano dane do tabeli: $tabela</p>";
            } else {
                echo "<p class='wynik'>Błąd:" . mysqli_error($polaczenie) . "</p>";
            }

            mysqli_close($polaczenie);
        }
        ?>
    </main>
    <aside>
        <h2>Nawigacja</h2>
        <ul>
            <li>
                <a href="./index.php">Matematyka</a>
            </li>
            <li>
                <a href="./polski.php">J. Polski</a>
            </li>
            <li>
                Dodawanie ocen
            </li>
        </ul>
    </aside>
    <footer>
        <a href="https://zsz.bobowa.pl/" target="blank">zsz.bobowa.pl</a>
    </footer>
</body>

</html>