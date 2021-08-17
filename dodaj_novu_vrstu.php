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

        <form action="nova_vrsta.php" method = "POST">
            <table>
                <tr>
                    <td style="font-weight: bold;">Nova vrsta</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="naziv_vrste" class="form-control" style="width:220px" >  
                    </td>                
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="unesi" value="Dodajte" class="btn btn-danger btn-md mt-3"> <br> <br>
                    </td>                
                </tr>
            </table>
        </form>
        
        <div>
                <p style="text-align:center;">
                    <img src="reklame/8.PNG">
                </p>
        </div>
        
    </div>


</body>
</html>

