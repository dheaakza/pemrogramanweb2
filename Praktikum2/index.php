<?php
    include "Azza.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hallo Praktikum 2</h1>
    <div>
        <?php
            //proses instansiasi
            $mahasiswa = new Azza('Dhea Anjam Akza Rosya');

            // menggunakan setter dan getter
            $mahasiswa->setNama('Dhea Anjam Akza Rosya');
            $mahasiswa->setTglLahir('2006-06-05');
            $mahasiswa->setAlamat('Lahat');

            echo "<br>";
            echo "Data Mahasiswa ". $mahasiswa->getNama() . "<br>";
            echo "Nama : ". $mahasiswa->getNama() . "<br>";
            echo "Tgl Lahir : ". $mahasiswa->getTglLahir() . "<br>";
            echo "Alamat : ". $mahasiswa->getAlamat() . "<br>";

            
            // memanggil method
            $mahasiswa->ucapkanSalam();


            echo "<Br>";

            $mahasiswa2 = new Azza ('M. Ilham Perdana Putra');
           

            $mahasiswa2->ucapkanSalam();

            ?>
    </div>

</body>
</html>