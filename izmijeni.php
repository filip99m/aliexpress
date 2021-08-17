<?php 
    
    $konekcija = mysqli_connect("localhost", "root", "", "aliexpress");

    isset($_GET['id']) && is_numeric($_GET['id']) ? $id = $_GET['id'] : exit("...");

    $sql = "SELECT * 
            FROM vrsta v, proizvod p  
            WHERE p.vrsta_id=v.id 
            AND p.id = $id";
    $rez = mysqli_query($konekcija, $sql);
    $red = mysqli_fetch_assoc($rez);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    <title>Izmijeni</title>
</head>
<body>

    <div class="container">
        <img src="reklame/6.PNG"> <br> <br>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">POČETNA</a>
            </li>
        </ul>
        <form action="konacna_izmjena.php" method="POST" enctype = "multipart/form-data">

            <h2 class="mt-3 ml-3 mb-3" style=" width:500px; color: #E52F20">Izmijeni specifikacije: </h2>

            <input type="hidden" name="id" value="<?=$id?>">
            <table class="table">
                <tr>
                    <td>Naziv</td>
                    <td>
                        <input type="text" name="naziv" class="form-control ml-3 mt-3 mb-2"value="<?=$red['naziv']?>">
                    </td>
                </tr>
                <tr>
                    <td>Cijena</td>
                    <td>
                        <input type="text" name="cijena" class="form-control ml-3 mt-3 mb-2"value="<?=$red['cijena']?>">
                    </td>
                </tr>
                <tr>
                    <td>Godina proizvodnje</td>
                    <td>
                        <input type="text" name="godina_proizvodnje" class="form-control ml-3 mt-3 mb-2" value="<?=$red['godina_proizvodnje']?>">
                    </td>
                </tr>
                <tr>
                    <td>Opis</td>
                    <td>
                        <textarea name="opis" cols="50" rows="5" class="form-control ml-3 mt-3 mb-2" ><?=$red['opis']?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Slika</td>
                    <td>
                        <input type="file" class="form-control ml-3" style="width: 250px;" name="photo[]"> 
                    </td>
                </tr>
                <tr>    
                    <td>
                        <button class="btn btn-danger mt-7 ml-5">POTVRDI</button>
                    </td>            
                </tr>
            </table>
        </form>
    </div>
    
    
</body>
</html>