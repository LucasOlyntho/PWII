<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <?php include'header.php'?>

    <p><h1> Contato </h1></p>

        <div class="centro">
        <form action="#" method="post">
  <div class= "col-md-5 mx-auto">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" id="NomeID" aria-describedby="emailHelp">
    </div>
  <div class="col-md-5 mx-auto">
  <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="EmaildID" aria-describedby="emailHelp">
  </div>
  <div class="col-md-5 mx-auto">
  <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
  <textarea class="form-control" id="TextID" rows="3"></textarea>
    </div>
    <br>
  <div class="col-md-1 mx-auto">
  <button type="submit" class="btn btn-dark">Enviar</button>
</div>
</form>
        </div>
        
    <?php include'footer.php'?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>