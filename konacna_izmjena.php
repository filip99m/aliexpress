<?php

    $konekcija = mysqli_connect("localhost", "root", "", "aliexpress");

    isset($_POST['id']) && is_numeric($_POST['id']) ? $id = $_POST['id'] : "";
    isset($_POST['naziv']) ? $naziv = $_POST['naziv'] : "";
    isset($_POST['cijena']) ? $cijena = $_POST['cijena'] : "";
    isset($_POST['godina_proizvodnje']) ? $godina_proizvodnje = $_POST['godina_proizvodnje'] : "";
    isset($_POST['opis']) ? $opis = $_POST['opis'] : "";


    if($_FILES['photo']['name'][0] == ''){
      $upit = "UPDATE proizvod 
              SET naziv = '$naziv', cijena = '$cijena', godina_proizvodnje = '$godina_proizvodnje', opis = '$opis' 
              WHERE id = $id ";
      $rez = mysqli_query($konekcija, $upit);
      }
      else{
        $slika = $_FILES['photo'];

        $ext = explode(".", $slika['name'][0]);
          
        $ext = $ext[count($ext) - 1];
          
        $dest = "./slike/" .uniqid(). "." . $ext;
          
        copy($slika['tmp_name'][0], $dest);
          
        $upit2 = "UPDATE zivotinje 
                  SET naziv = '$naziv', cijena = '$cijena',godina_proizvodnje = '$godina_proizvodnje' , opis = '$opis', Fotografija ='$dest' 
                  WHERE id = $id";      
        $res = mysqli_query($konekcija, $upit2);
      }
        
    
    

    header("location: index.php");
    
    
?>

