<?php
    $conn = mysqli_connect("localhost","root","","db_bukutamu");

    // if(!$conn){
    //     echo 'td masuk';
    // }else{
    //     echo 'masuk';
    // }


   function simpan($data){

    $date = date('d-m-y h:i:s');
    global $conn;

        $nama = $data['namatamu'];
        $instansi = $data['instansi'];
        $mencari = $data['mencari'];
        $alasan = $data['urusan']; 

        mysqli_query($conn, "INSERT INTO log_tamu VALUES('','$nama','$instansi','$mencari','$alasan','$date')");
    }

        function select($select){
            global $conn;
            $result = mysqli_query($conn, $select); 
            $row = [];
    
            while($row = mysqli_fetch_assoc($result)){
                $rows[]= $row;
                
            }
            return $rows;
        }    
?> 