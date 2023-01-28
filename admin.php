<?php 
    require 'function.php';

    $result = select('SELECT * FROM log_tamu');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tamu</title>
</head>
<body>

    <!-- navigasi -->

    <nav>
        <h1>Catatan Tamu</h1>
    </nav>
    <!-- container -->
    <div class="container">
        Urutkan Sesuai
        <select name="" id="">
            <option value="" disabled selected>none</option>
            <option value="">hari ini</option>
            <option value="">Nama</option>
        </select>
        <button>cari</button>
<br>

        <table border>
            <tr>
                <td>Nama</td>
                <td>Tanggal</td>
                <td>Keperluan</td>
                <td>Nama yang dicari</td>
            </tr>
        <?php foreach($result as $data) : ?>
            <tr>
                <td> <?= $data['Nama_tamu'] ?></td>
            </tr>
        <?php endforeach; ?>
        </table>
    </div>
</body>
</html>