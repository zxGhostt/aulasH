<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio</title>
</head>
<body>
    <h1>Exercicio</h1>

    <form action="recebe.php" method="post">
    
        <fieldset>
            <legend>Formulario</legend>

            <p>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" required placeholder="Informe seu nome" size="30">
            </p>
            <p>
                <label for="idade">Idade: </label>
                <input type="text" name="idade" required placeholder="Informe sua idade" size="30">
            </p>
            <p>
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" 
                title="Informe o CPF corretamente seguindo: xxx.xxx.xxx-xx" 
                maxlength="14" placeholder="Informe seu CPF" size="30">
            </p>

            <input type="submit" value="Enviar">
        </fieldset>

    </form>
</body>
</html>