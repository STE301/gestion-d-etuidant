<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
        <center>
            <p class="ensat">ENSAT Platforme</p>
        </center>

        <center>
            <form action="signup.php" method="POST" >
                <p class="name" >Nom d'utulisateur : </p>
                <input type="text" name="nomEtulisateur"> <br>
                <p class="mp">Mot de passe : </p>
                <input type="password" name="motDePasse"> <br><br><br>

                <input class="register"  type="submit" name="Register" value="Register">
            </form>
        </center> 
</body>
</html>