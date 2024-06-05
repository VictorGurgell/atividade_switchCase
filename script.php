<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cor Favorita!</title>
    <link rel="stylesheet" href="phpcss.css">
</head>
<body>
<center>
<div>
    <?php
    $favcolor = $_POST["favcolor"];

    switch ($favcolor) {
        case "vermelho":
            echo '<body style="background-color:#ff6969">
                <p>Sua cor favorita é vermelho!</p>
                </body>';
        break;
        
        case "azul":
            echo '<body style="background-color:#5e6eff">
                <p>Sua cor favorita é azul!</p>
                </body>';
        break;
        
        case "verde":
            echo '<body style="background-color:#5cff7a">
                <p>Sua cor favorita é verde!</p>
                </body>';
        break;
        
        case "amarelo":
            echo '<body style="background-color:#eeff69">
                <p>Sua cor favorita é amarelo!</p>
                </body>';
        break;

        case "rosa":
            echo '<body style="background-color:#FFC0CB">
                <p>Sua cor favorita é rosa!</p>
                </body>';
        break;
        
        case "roxo":
            echo '<body style="background-color:#b969ff">
                <p>Sua cor favorita é roxo!</p>
                </body>';
        break;
        
        case "preto":
            echo '<body style="background-color:#1c1c1c">
                <p style="color: white;">Sua cor favorita é preto!</p>
                </body>';
        break;
        
        case "laranja":
            echo '<body style="background-color:#FFA500">
                <p>Sua cor favorita é laranja!</p>
                </body>';
        break;
        
        case "branco":
            echo '<body style="background-color:#FFFFFF">
                <p>Sua cor favorita é branco!</p>
                </body>';
        break;
        
        default:
            echo "<p>Sua cor favorita não é nenhuma no nosso catálogo!</p>";
        break;
    }

 ?>
</div>
</center>
</body>
</html>