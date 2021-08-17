<?php

    $konekcija = mysqli_connect("localhost", "root", "", "aliexpress");

    isset($_GET['id']) ? $id=$_GET['id'] : exit("Greska.");

    $upit= "SELECT p.id, p.naziv, v.naziv_vrste, p.cijena, p.cijena, p.godina_proizvodnje, p.opis 
        FROM proizvod p, vrsta v 
        WHERE p.vrsta_id = v.ID 
        AND p.id = $id";

    $rez= mysqli_query($konekcija, $upit);
    $red=mysqli_fetch_assoc($rez);
    $upit2="SELECT Fotografija FROM proizvod WHERE id = $id";
    $rez2 = mysqli_query($konekcija, $upit2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalji o ljubimcu: </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    
</head>
<body>

    <div class="container">
        <img src="reklame/5.PNG"> <br> <br></img>

        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">POČETNA</a>
            </li>
        </ul>

        <h2 class="ml-5 mt-3 mb-3">Detalji: </h2>
        
        <table class="table">
            <tr>
                <td style='font-weight: bold'>Naziv:</td>
                <td><?=$red['naziv']?></td>
            </tr>
            <tr>
                <td style='font-weight: bold'>Vrsta:</td>
                <td><?=$red['naziv_vrste']?></td>
            </tr>
            <tr>
                <td style='font-weight: bold'>Cijena:</td>
                <td><?=$red['cijena']?></td>
            </tr>
            <tr>
                <td style='font-weight: bold'>Godina proizvodnje:</td>
                <td><?=$red['godina_proizvodnje']?> </td>
            </tr>
            <tr>
                <td style='font-weight: bold'>Opis:</td>
                <td><?=$red['opis']?></td>
            </tr>
            
            <tr>
                <td style='font-weight: bold'>Fotografija:</td>
                <td>

<?php

        $i = 0;
        while ($slika = mysqli_fetch_assoc($rez2)) {
        $putanja = $slika['Fotografija'];
        $act = "";
        if ($i == 0)
            $act = "active";
            echo "<div class='$act'>";
            echo "<img src='$putanja' width='300px'>";
            echo "</div>";
        $i += 1;
    }
?>

        </td>
    </tr>
    

    </table>

    </body>
    </html>