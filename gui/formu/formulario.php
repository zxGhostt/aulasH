<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>formulario</title>
    </head>

    <body>
        <h1>Cadastro de usuário</h1>
        <form action="recebe.php" method="post">

        Nome: <input type="text" name="nome" required placeholder="Informe seu nome" size="30"><br><br>
        senha: <input type="password" name="senha" required placeholder="Informe uma senha" maxlength="8"
        size="30"><br><br>
        cor: <input type="color" name="color"><br><br>
        data de nascimento: <input type="date" name="dataN"><br><br>
        email: <input type="email" name="email"required size="30"><br><br>
        curso:<br>
        TI <input type="radio" name="1" value="ti"><br><br>
        TA <input type="radio" name="1" value="ta"><br><br>
        TL <input type="radio" name="1" value="tl"><br><br>
        
        Disciplinas: <br>
        redes: <input type="checkbox" name="disc[]" value="redes">
        LV1: <input type="checkbox" name="disc[]"value="lv1">
        POO: <input type="checkbox" name="disc[]" value="poo"><br><br>

        <select name="estado"><br><br>
            <option value="">selecione</option>
            <option value="df">DF</option>
            <option value="mg">MG</option>
            <option value="go">GO</option>
        </select><br><br>
        
        Observação <br><textarea name="obs" cols="30" rows="5"></textarea><br><br>

        <input type="submit" value="Cadastrar"><br><br>

        </form>
    
    </body>
</html>