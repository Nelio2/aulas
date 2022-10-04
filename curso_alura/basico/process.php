<?php

if (isset($_POST['Enviar'])) {
  
  $nome  = $_POST['nome'];
  $idade = $_POST['idade'];

}

if ($idade <= 17) {

  echo "<h2>Desculpe, $nome a sua idade nao permite se cadastrar</h2>";
} else {
  echo "<h3>Parabens $nome, voce pussui e maior de idade pode se cadastrar</h3>";
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Info</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style type="text/css">
    
    h2{
      text-align: center;
      padding: 20px 10px 20px 10px;
      background-color: red;
      border: 1px;
      color: #ffff;
    }

     h3{
      text-align: center;
      padding: 20px 10px 20px 10px;
      background-color: forestgreen;
      border: 1px;
      color: #ffff;
    }

  </style>
</head>
<body>

  <a class="btn btn-primary" href="#" role="button">Link</a>

</body>
</html>
 