<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once 'Animal.php';
        require_once 'Ave.php';
        require_once 'Mamifero.php';
        require_once 'Peixe.php';
        require_once 'Reptil.php';

        $ave = new Ave();
        $mamifero = new Mamifero();
        $peixe = new Peixe();
        $repril = new Reptil();

        $ave->emitirSom();
        $peixe->emitirSom();
    ?>
    
</body>
</html>