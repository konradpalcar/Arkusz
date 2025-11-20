<?php
$conn = mysqli_connect("localhost", "root", "", "prognoza");
$query = "SELECT * FROM pogoda WHERE miasta_id = 2 ORDER BY data_prognozy DESC";
$result = mysqli_query($conn, $query);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody Poznań</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <section class="left">
            <p>maj, 2019r.</p>
        </section>
        <section class="middle">
            <h2>Prognoza dla Poznania</h2>
        </section>
        <section class="right">
            <img src="logo.png" alt="prognoza">
        </section>
    </header>
    <article>
        <div>
            <a href="kwerendy.txt">Kwerendy</a>
        </div>
        <div>
            <img src="obraz.jpg" alt="Polska, Poznań">
        </div>
    </article>
    <main>
        <table>
            <tr>
                <th>Lp.</th>
                <th>DATA</th>
                <th>NOC - TEMPERATURA</th>
                <th>DZIEŃ - TEMPERATURA</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>
            <?php
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                        echo "<td>" . $row[0] . "</td>";
                        echo "<td>" . $row[2] . "</td>";
                        echo "<td>" . $row[3] . "</td>";
                        echo "<td>" . $row[4] . "</td>";
                        echo "<td>" . $row[5] . "</td>";
                        echo "<td>" . $row[6] . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </main>
    <footer>
        <p>Strone wykonał: 00000000000</p>
    </footer>
</body>
</html>