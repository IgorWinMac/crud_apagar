<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<?php

include "conexao.php";


$id = $_GET['id'];

$query = "SELECT * FROM usuarios WHERE id_usuario = '$id'";

$resultado = mysqli_query($connection, $query);

$linha = mysqli_fetch_assoc($resultado);

?>

<body>

<div class="container">

<h1>Apagar</h1>
    
<form class="row g-3" action="apagar_script.php" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome" value="<?php echo $linha['nome']?>">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Endereco</label>
    <input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco'] ?>">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control" name="data_nascimento" value="<?php echo $linha['data_nascimento']?>" >
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-danger">Apagar</button>
  </div>

  <div class="col-12">
    <input type="hidden" name="id_usuario" value="<?php echo $linha['id_usuario']?>">
  </div>
</form>

<div class="col-12">
    <a href="pesquisa.php" button type="submit" class="btn btn-primary">Voltar</button></a>
  </div>

    </div>
</body>
</html>