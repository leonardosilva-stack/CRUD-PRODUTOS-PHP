<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Operação Crud</title>
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="produto.php" class="text-light text-decoration-none">
            ADICIONAR PRODUTO
            </a>
            
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Operação</th>
                </tr>
            </thead>
            <tbody>

            <?php
                $sql = "Select * from `produtos`";
                $result=mysqli_query($con, $sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id         = $row['id'];
                        $nome       = $row['nome'];
                        $descricao  = $row['descricao'];
                        $preco      = $row['preco'];
                        echo 
                        '<tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$nome.'</td>
                            <td>'.$descricao.'</td>
                            <td>R$ '.number_format($preco,2,",",".").'</td>
                            <td>
                            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light text-decoration-none">ATUALIZAR</a></button>
                            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light text-decoration-none">DELETAR</a></button>
                            </td>
                        </tr>';
                    }
                }
            ?>


            </tbody>
        </table>
    </div>
</body>

</html>