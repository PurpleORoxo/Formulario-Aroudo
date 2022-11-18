<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <div>
        <h1>Formulario</h1>

        <?php
        if(!isset($_POST['submit'])){
        ?>
        <form action="Php_Form.php" method="post">
            <p>Nome:</p>
            <input type="text" name="nome" id="nome">
            <br> 

            <p>Gênero:</p>
            <input type="radio" name="genero" id="genero" value="masculino">
            <label for="genero">Masculino</label>
            <br>

            <input type="radio" name="genero" id="genero" value="feminino">
            <label for="genero">Feminino</label>
            <br>

            <input type="radio" name="genero" id="genero" value="info">
            <label for="genero">Prefiro não informar</label>
            <br>

            <p>Data de nascimento:</p>
            <input type="date" name="data" id="data" max="9999-12-31">
            <br>

            <p>N° de telefone:</p>
            <input type="tel" name="telefone" id="telefone" required placeholder="(XX) 9XXXX-XXXX" maxlength="14">
            <br>

            <p>Email:</p>
            <input type="text " name="email" id="email" required placeholder="XXXXXXX@gmail.com">
            <br>

            <input type="submit" value="Enviar" id="botao">

        </form>
    </div>
    
    <?php 
    }
    ?>
</body>
</html>