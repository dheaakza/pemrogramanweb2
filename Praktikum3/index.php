<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum3</title>
</head>
<body>
    <h1>Konsep Pewarisan</h1>
    <div class="">
        <?php
        include "OrangBiasa.php";
        include "OrangInggris.php";
        include "Mahasiswa.php";

        $aza = new OrangBiasa('Aza');
        $aza->ucapSalam();
        echo "<br>";

        $mas = new OrangInggris('Mas');
        $mas->ucapSalam(); //override
        echo "<br>";

        $dhea = new Mahasiswa('Dhea');
        $dhea->ucapSalam();
        echo "<br>";
        $dhea->setNim("701230040");
        $dhea->setProdi("Sistem Informasi");

        $nilaiDhea = new Nilai();
        $nilaiDhea->setTugas(91);
        $nilaiDhea->setUts(88);
        $nilaiDhea->setUas(90);

        $dhea->setNilai($nilaiDhea);
        $dhea->tampilkanData();

     ?>
    </div>
</body>
</html>