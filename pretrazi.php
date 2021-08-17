
<?php

    $konekcija = mysqli_connect("localhost", "root", "", "aliexpress");


    if(isset($_POST['naziv_vrste'])){

        $naziv_vrste = $_POST['naziv_vrste'];
        $upit = " p.vrsta_id = $naziv_vrste"; 
    } else{

        $upit = " 1=1";
    }

    $sql = "SELECT p.id, p.naziv, v.naziv_vrste, p.cijena, p.godina_proizvodnje
            FROM proizvod p, vrsta v 
            WHERE p.vrsta_id=v.id AND $upit";


    $rez= mysqli_query($konekcija, $sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
<title>Pretraga po kriterijumima</title>
</head>

<body>

    <div class="container">
        <img src="reklame/5.PNG"> <br> <br>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">POČETNA</a>
            </li>
        </ul>

        <h4>Rezultat Vaše pretrage:</h4>
        <table class="table table-borderless text-center">
        <thead class="thead-dark">
                <tr>
                    <th>Naziv</th>
                    <th>Vrsta</th>
                    <th>cijena</th>
                    <th>Godina proizvodnje</th>
                    <th>Detalji</th>
                    <th>Izmijeni</th>
                    <th>Izbriši</th>
                    <th>Poruci</th>
                </tr>

                </thead>
                <tbody>
                    
                    <?php

                    
                        echo "<tr>";
                        while($red = mysqli_fetch_assoc($rez)){ 

                            $id= $red['id'];
                            $naziv = $red['naziv'];
                            $naziv_vrste = $red['naziv_vrste'];
                            $cijena = $red['cijena'];
                            $godina_proizvodnje = $red['godina_proizvodnje'];
                            $detalji = "<a href=\"detalji.php?id=$id\"><i class=\"fa fa-info-circle\"></i></a>";
                            $izmijeni = "<a href=\"izmijeni.php?id=$id\"><i class=\"fa fa-pen\"></i></a>";
                            $izbrisi = "<a href=\"izbrisi.php?id=$id\"><i class=\"fa fa-times-circle\"></i></a>";
                            $poruci = "<a href=\"poruci.php?id=$id\"><i class=\"fa fa-shopping-cart\"></i></a>";


                            echo "<td>$naziv</td>";
                            echo "<td>$naziv_vrste</td>";
                            echo "<td>$cijena</td>";
                            echo "<td>$godina_proizvodnje</td>";
                            echo "<td>$detalji</td>";
                            echo "<td>$izmijeni</td>";
                            echo "<td>$izbrisi</td>";
                            echo "<td>$poruci</td>";
                            echo "</tr>";
                        }
                    ?>

            </tbody>
        </table>

</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
