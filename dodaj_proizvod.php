<?php

    $konekcija = mysqli_connect("localhost", "root", "", "aliexpress");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    <title>Forma za dodavanje novog ljubimca</title>
</head>

<body>

    <div class="container">
        <img src="reklame/6.PNG"> <br> <br>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">POČETNA</a>
            </li>
        </ul>

        <h3 class="mt-3 ml-3 mb-5">Unesite podatke: </h3>

        <div class="container ml-2">
        
            <form action="dodaj.php" method = "POST" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td>Naziv</td>
                    <td>
                        <input type="text" name="naziv" class="form-control" placeholder="Unesite naziv"> 
                    </td>
                </tr>
                <tr>
                    <td>Vrsta</td>
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
                </tr>
                <tr>
                    <td>Cijena</td>
                    <td>
                        <input type="text" name="cijena" class="form-control" placeholder="Unesite cijenu"> 
                    </td>
                </tr>
                <tr>
                    <td>Godina proizvodnje</td>
                    <td>
                        <input type="text" name="godina_proizvodnje" class="form-control" placeholder="Godina proizvodnje">  
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <textarea name="opis" class="form-control" cols="40" rows="5" placeholder="Opis"></textarea>  
                    </td>
                </tr>
                <tr>
                    <td>Slika</td>
                    <td>
                        <input type="file" name = "photo[]" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="unesi" value="Dodajte" class="btn btn-danger btn-md mt-3">
                    </td>
                </tr>
            </table>

    
                
    
                






            </form>
            
        </div>


    
</div>
</body>
</html>