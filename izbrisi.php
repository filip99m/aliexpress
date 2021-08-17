<?php 

    $konekcija = mysqli_connect("localhost", "root", "", "aliexpress");

    isset($_GET['id']) && is_numeric($_GET['id']) ? $id = $_GET['id'] : "";

        $upit = "DELETE FROM proizvod WHERE id = $id";
        $rez = mysqli_query($konekcija, $upit);




    
    if($rez){
    header("location: index.php?msg=izbrisano");
    }else{
    header("location: index.php?msg=greska");
    }

?>