<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php 
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once 'Visualização.php';

            $v = array();

            $v[0] = new Video("Aula 1");
            $v[1] = new Video("Aula 2"); 
            $v[2] = new Video("Aula 3");

            $v[2]->like();

            print_r($v[0]);
            print_r($v[1]);
            print_r($v[2]);

            $g = array();
            $g[0] = new Gafanhoto("João", 18, "masculino", "@gamil.com");
            
            $g[0]->viMaisUm();
            $g[0]->viMaisUm();
            print_r($g[0]);

            $vis = new Visualização($g[0], $v[0]);
            print_r($vis);
        ?>
    </pre>
    
</body>
</html>