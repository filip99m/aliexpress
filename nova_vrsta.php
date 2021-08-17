<?php

    $konekcija = mysqli_connect("localhost", "root", "", "aliexpress");

    isset($_POST['naziv_vrste']) ? $naziv_vrste=$_POST['naziv_vrste'] : "";


    $upit= "INSERT INTO vrsta (naziv_vrste) VALUES ('$naziv_vrste') "; 

    $rezultat = mysqli_query($konekcija, $upit);

    if($rezultat){
        header("location: index.php?msg=film_serija_izmijenjena");
    }else{  
        header("location: index.php?msg=greska_pri_izmjeni");
    }

?>