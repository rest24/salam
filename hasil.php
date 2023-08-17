<!DOCTYPE html>
<html>
<head>
    <title>Hasil</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $sapa = $_POST["sapa"];

            if ($sapa == "Indonesia") {
                echo "<p class='greeting'>Selamat Pagi $nama ..!! </p>";
                echo "<p class='message'>Semoga hari Anda menyenangkan $nama ..!! :D</p>";
            } elseif ($sapa == "Inggris") {
                echo "<p class='greeting'>Good Morning $nama ..!! </p>";
                echo "<p class='message'>Have a great day, $nama ..!! :)</p>";
            } elseif ($sapa == "Sunda") {
                echo "<p class='greeting'>Wilujeung Enjing $nama ..!! </p>";
                echo "<p class='message'>Mugia Silaing dipaparin kasehatan, $nama ..!! :)</p>";
            } elseif ($sapa == "Arab") {
                echo "<p class='greeting'>صباح الخير $nama ..!! </p>";
                echo "<p class='message'>يوم سعيد، $nama ..!! :)</p>";
            } elseif ($sapa == "Cina") {
                echo "<p class='greeting'>早上好 $nama ..!! </p>";
                echo "<p class='message'>祝您有愉快的一天，$nama ..!! :)</p>";
            } elseif ($sapa == "Rusia") {
                echo "<p class='greeting'>Доброе утро $nama ..!! </p>";
                echo "<p class='message'>Пусть ваш день будет приятным, $nama ..!! :)</p>";
            } elseif ($sapa == "Latin") {
                echo "<p class='greeting'>Salve $nama ..!! </p>";
                echo "<p class='message'>Bene sit tibi, $nama ..!! :)</p>";
            } elseif ($sapa == "Spanyol") {
                echo "<p class='greeting'>¡Buenos días $nama ..!! </p>";
                echo "<p class='message'>Espero que tengas un día estupendo, $nama ..!! :)</p>";
            } elseif ($sapa == "Perancis") {
                echo "<p class='greeting'>Bonjour $nama ..!! </p>";
                echo "<p class='message'>Bonne journée, $nama ..!! :)</p>";
            } elseif ($sapa == "Jepang") {
                echo "<p class='greeting'>おはようございます $nama ..!! </p>";
                echo "<p class='message'>素晴らしい一日を、$nama ..!! :)</p>";
            } elseif ($sapa == "Jerman") {
                echo "<p class='greeting'>Guten Morgen $nama ..!! </p>";
                echo "<p class='message'>Ich wünsche Ihnen einen schönen Tag, $nama ..!! :)</p>";
            } elseif ($sapa == "Korea") {
                echo "<p class='greeting'>안녕하세요 $nama ..!! </p>";
                echo "<p class='message'>즐거운 하루 되세요, $nama ..!! :)</p>";
            } elseif ($sapa == "") {
                echo "<p class='error'>Anda tidak memilih apapun ..!! :(</p>";
            }

            echo "<br>";
            echo "<a href='index.html' class='back-button'>Kembali</a>";
        }
        ?>
    </div>
</body>
</html>
