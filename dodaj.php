<?php

    $konekcija = mysqli_connect("localhost", "root", "", "aliexpress");

    isset($_POST['naziv']) ? $naziv=$_POST['naziv'] : "";
    isset($_POST['naziv_vrste']) ? $naziv_vrste=$_POST['naziv_vrste'] : "";
    isset($_POST['cijena']) ? $cijena=$_POST['cijena'] : "";
    isset($_POST['godina_proizvodnje']) ? $godina_proizvodnje=$_POST['godina_proizvodnje'] : "";
    isset($_POST['opis']) ? $opis=$_POST['opis'] : "";

    if(isset($_FILES['photo'])) {
        $slika = $_FILES['photo'];
            $ext = explode(".", $slika['name'][0]);

            $ext = $ext[count($ext) - 1];

            $dest = "./slike/" .uniqid(). "." . $ext;

            copy($slika['tmp_name'][0], $dest);

            }

    $upit= "INSERT INTO proizvod (naziv, vrsta_id, cijena, godina_proizvodnje, opis, Fotografija) VALUES ('$naziv','$naziv_vrste','$cijena','$godina_proizvodnje','$opis', '$dest') "; 

    $rezultat = mysqli_query($konekcija, $upit);

    if($rezultat){
        header("location: index.php");
    }


?>
