<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        require_once 'Livro.php';
        require_once 'Pessoa.php';

        $p1 = new Pessoa("Ian", 19, "Masculino");
        $l1 = new Livro("Exílio", "Ivu", 500, $p1,);

        $l1->abrir();
        $l1->folear();
        $l1->abrirPagina(56);

        $l1->status();

    ?>
    
</body>
</html>