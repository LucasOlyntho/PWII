<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenvolvedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 60%;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
            padding: 2px 16px;
        }
    </style>
</head>
<body>
    <?php include'header.php'?>

<div class="centro">

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="card">
                    <img src="images/desenvolvedor1.png" >
                    <div class="container">
                        <h4><b>Eduardo Cherubim</b></h4> 
                        <p>Estudante do curso Desenvolvimento de sistemas</p> 
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/usuario.png" style="width:100%">
                    <div class="container">
                        <h4><b>John Doe</b></h4> 
                        <p>Architect & Engineer</p> 
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/usuario.png" style="width:100%">
                    <div class="container">
                        <h4><b>John Doe</b></h4> 
                        <p>Architect & Engineer</p> 
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/usuario.png" style="width:100%">
                    <div class="container">
                        <h4><b>John Doe</b></h4> 
                        <p>Architect & Engineer</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php include'footer.php'?>
</body>
</html>