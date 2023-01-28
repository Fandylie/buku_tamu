<?php 
    // require 'function.php';

    // if (isset($_POST['submit'])){
    //     simpan($_POST);

    //     // header("location: masuk");
    // }
    
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="style.css">
    
    <!-- favicon -->

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- title -->
    <title>Buku Tamu SMKTI</title>
</head>
<body>

    <!-- <img src="images/SMK-TI-BALI-GLOBAL-SINGARAJA.png" alt="" class="logosmkti"> -->
    <!-- navigasi -->
    <nav>
        <div class="logo">
            <h1>Buku Tamu</h1>
            <p>SMK TI Bali Global Singaraja</p>
        </div>
    </nav>

    <!-- container -->
    <div class="container"> 
    
        <!-- form -->
        <form  method="post"> 
            <div class="mb-3">
                <label for="namatamu" class="form-label">Nama</label>
                <input type="text" class="form-control" id="namatamu" name="namatamu" >
            </div>
            <div class="mb-3">
                <label for="instansi" class="form-label">Instansi</label>
                <input type="text" class="form-control" name="instansi" id="instansi"  aria-describedby="instansihelp">
                <div id="instansihelp" class="form-text">*Tulis Jika Urusan Instansi</div>
            </div>
            <div class="mb-3">
                <label for="mencari" class="form-label">Mencari</label>
                <input type="text" name="mencari" class="form-control" id="mencari">
            </div>
            <div class="mb-3">
                <label for="urusan" class="form-label">Urusan</label>
                <textarea class="form-control" id="urusan" name="urusan" aria-label="With textarea"></textarea>
            </div>
            <button type="submit" name="submit" class="btn" style="background-color: #453C67; color: white;">Submit</button>
        </form>

     </div>
     
     <footer>
            <p>Copyright &copy 2023 </p>
        </footer>
</body>
    <!-- bootstrapp js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>