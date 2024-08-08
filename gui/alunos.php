<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            td{
                border: 2px solid black;
            }

        </style>
    </head>
    <body>
        <?php
        $alunos = array(
            array("nome"=>"Maria","idade"=> 13,"CPF" => "123"),
            array("nome"=>"Pedro","idade"=> 22,"CPF" => "321"),
            array("nome"=>"Jaria","idade"=> 32,"CPF" => "456"),
        );
    
        ?>

        <h1>Alunos cadastrados</h1>

        <table>
            <tr>
                <td>NOME</td>
                <td>IDADE</td>
                <td>CPF</td>
            </tr>

            <?php foreach($alunos as  $a){ ?>
            <tr>
                <td> <?php echo $a['nome'] ?> </td>
                <td> <?php echo $a['idade'] ?> </td>
                <td> <?php echo $a['CPF'] ?> </td>
            </tr>
            <?php }?>
        </table>

    </body>
</html>