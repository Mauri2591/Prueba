
<?php include_once '../Config/Conexion.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Segunda Pagina</h1>
    <div><?php echo openssl_decrypt($_GET['pagina'],AES,"Ciber*-^%&!$#ADd1s95FG7");?></div>
    <div><?php echo openssl_decrypt("qFmPec5NUedLYKCpBN7iWQ==",AES,"Ciber*-^%&!$#ADd1s95FG7") ?></div>
</body>
</html>