<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    $sql = "insert into `produtos` (nome,descricao,preco) values('$nome','$descricao','$preco')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Incluido com sucesso";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" placeholder="Digite o nome do produto" name="nome" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Descrição</label>
                <input type="text" class="form-control" placeholder="Digite a Descrição" name="descricao" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Preço</label>
                <input type="text" class="form-control" placeholder="Digite valores sem . ou ," name="preco" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary my-2" name="submit">ADICIONAR</button>
        </form>
    </div>
</body>

</html>