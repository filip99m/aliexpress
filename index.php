<?php
    
    $konekcija = mysqli_connect("localhost", "root", "", "aliexpress");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AliExpress</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>


<div class="container">
    <img src="reklame/5.PNG"> <br> <br>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="dodaj_proizvod.php">Dodaj novi proizvod</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dodaj_novu_vrstu.php">Dodaj novu vrstu</a>
            </li>
        </ul>
    <h1 class="mt-3 mb-5 text-center" style="font-size: 50px; color: #E52F20;">AliExpress</h1>

    <form action="pretrazi.php" method="POST">
        <table class="table table-borderless text-center">
            <tr style="font-weight: bold;">
                <td>Vrsta:</td>
            </tr>
            <tr>
                <td>
                    <select class="form-control" name="naziv_vrste" >
                        <option value="-1">-izaberi tip-</option>
                        <?php
                            $sql = "SELECT * FROM vrsta ";
                            $rezultat = mysqli_query($konekcija, $sql);
                            
                            while($row = mysqli_fetch_assoc($rezultat)){
                                $id = $row['id'];
                                $naziv_vrste = $row['naziv_vrste'];

                                echo "<option value = \"$id\">$naziv_vrste</option>";
                            }
                        ?>
                    </select>
                </td>
                <td>
                    <input type="submit" name="pretrazi" value="PRETRAGA" class="btn btn-danger btn-block">     
                </td>
            </tr>
        </table>
    </form>

    <div>
        <p class="mt-5" style="text-align:center;">
            <img src="reklame/2.PNG" alt="reklama">
        </p>
    </div>
    

    <div class="mt-5">
        <table class="table text-center">
            <thead class="thead-dark">
            <tr>
                <th>Naziv</th>
                <th>Vrsta</th>
                <th>Cijena</th>
                <th>Detalji</th>
                <th>Izmijeni</th>
                <th>Izbriši</th>
                <th>Poruči</th>
            </tr>

            </thead>
            <tbody>
                


<?php

                $upit= "SELECT p.id, p.naziv, v.naziv_vrste, p.cijena
                        FROM proizvod p, vrsta v  
                        WHERE v.id = p.vrsta_id";
                $rez= mysqli_query($konekcija, $upit);
                echo "<tr>";
                while($red= mysqli_fetch_assoc($rez)){ 

                    $id= $red['id'];
                    $naziv = $red['naziv'];
                    $naziv_vrste = $red['naziv_vrste'];
                    $cijena = $red['cijena'];
                    $detalji = "<a href=\"detalji.php?id=$id\"><i class=\"fa fa-info-circle\"></i></a>";
                    $izmijeni = "<a href=\"izmijeni.php?id=$id\"><i class=\"fa fa-pen\"></i></a>";
                    $izbrisi = "<a href=\"izbrisi.php?id=$id\"><i class=\"fa fa-times-circle\"></i></a>";
                    $poruci = "<a href=\"poruci.php?id=$id\"><i class=\"fa fa-shopping-cart\"></i></a>";


                    echo "<td>$naziv</td>";
                    echo "<td>$naziv_vrste</td>";
                    echo "<td>$cijena</td>";
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
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>