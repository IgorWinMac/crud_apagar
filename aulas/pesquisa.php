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

<body>

<div class="container">

<h1>Resultado da Pesquisa</h1>

<table class="table">
  <thead>
    <tr>
  
      <th>Nome</th>
      <th>Endereco</th>
      <th>Data de Nascimento</th>

   </tr>
  </thead>

<tbody>

<?php

include "conexao.php";

$query = "SELECT * FROM usuarios";

$fila = mysqli_query($connection,$query);

while($data = mysqli_fetch_assoc($fila)){

   $id = $data["id_usuario"];
   $nome = $data["nome"];
   $endereco = $data["endereco"];
   $data_nascimento = $data["data_nascimento"];

   echo "<tr>
      <td>$nome</td>
      <td>$endereco</td>
      <td>$data_nascimento</td>
      <td><a href='editar.php?id=$id'><button>Editar</button></a></td>;
      <td><a href='apagar.php?id=$id'><button>Apagar</button></a></td>;
    </tr>";
  
}

?>
</tbody>
</table>

<div class="col-12">
    <a href="cadastro.php" button type="submit" class="btn btn-primary">Voltar</button></a>
  </div>

</body>
</html>

</div>