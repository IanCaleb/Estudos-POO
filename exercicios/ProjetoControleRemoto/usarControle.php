<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="global.css">
</head>
<body>

    <?php 
        require_once 'ControleRemoto.php';
        require_once 'Controladora.php';

        // 🔹 2. Depois, inicie a sessão
        session_start();

        // 🔹 3. Parâmetros padrão ou vindos da URL
        $cor = $_GET["cor"] ?? "Preto";
        $marca = $_GET["marca"] ?? "LG";
        $pilha = $_GET["pilha"] ?? 2;
        $acao = $_GET["acao"] ?? null;

        // 🔹 4. Cria o controle se ainda não existir
        if (!isset($_SESSION['controle']) || !$_SESSION['controle'] instanceof ControleRemoto) {
            $_SESSION['controle'] = new ControleRemoto($cor, $marca, $pilha);
        }

        $c = $_SESSION['controle'];

        // 🔹 5. Executa ação, se houver
        if ($acao) {
            switch ($acao) {
                case 'power':        $c->power(); break;
                case 'maisVolume':   $c->maisVolume(); break;
                case 'menosVolume':  $c->menosVolume(); break;
                case 'mudo':         $c->mudo(); break;
                case 'reproduzir':   $c->reproduzir(); break;
            }
            // Atualiza o objeto na sessão
            $_SESSION['controle'] = $c;
        }
        ?>

    <nav>
        <ul>
            <li><a href="index.php">Criar Controle</a></li>
            <li><a href="usarControle.php">Usar Controles</a></li>
        </ul>
    </nav>

    <div class="titulo">
        <h1>Usar Remoto</h1>
    </div>

    <main>

        <div class="card">
            <h1>Controle</h1><br>

            <div class="botões">
                <Button onclick="window.location.href='usarControle.php?acao=power&cor=<?=$cor?>&marca=<?=$marca?>&pilha=<?=$pilha?>'">Ligar/desligar</Button>

                <Button onclick="window.location.href='usarControle.php?acao=maisVolume&cor=<?=$cor?>&marca=<?=$marca?>&pilha=<?=$pilha?>'">Aumentar volume</Button>

                <Button onclick="window.location.href='usarControle.php?acao=menosVolume&cor=<?=$cor?>&marca=<?=$marca?>&pilha=<?=$pilha?>'">Abaixar volume</Button>

                <Button onclick="window.location.href='usarControle.php?acao=mudo&cor=<?=$cor?>&marca=<?=$marca?>&pilha=<?=$pilha?>'">Mudo</Button>

                <button onclick="window.location.href='usarControle.php?acao=reproduzir&cor=<?=$cor?>&marca=<?=$marca?>&pilha=<?=$pilha?>'">Play</button>
            </div>
        </div>

        <div class="menu">
            <h1>MENU</h1>

            <h2>A cor é:</h2>
            <p><?=$c->getCor()?></p>

            <h2>A marca é:</h2>
            <p><?=$c->getMarca()?></p>

            <h2>Ele Precisa de:</h2>
            <p><?=$c->getPilhaNecessaria()?> Pilhas</p>

            <h2>Ele tem</h2>
            <p><?=$c->getPilha()?></p>

            <h2>Volume:</h2>
            <p><?=$c->getVolume()?></p>

            <h2>Está ligado?</h2>
            <p><?=$c->getLigado()?"SIM":"NÃO"?></p>

            <h2>Está tocando?</h2>
            <p><?=$c->getTocando()?"SIM":"NÃO"?></p>
        </div>
    </main>
    
</body>
</html>