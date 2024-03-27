<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="./Assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body >
<div class="add-tarefa">
    
    <div class="container">
    
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Criar Tarefa</button>


    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
      
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
          

                <h4 class="modal-title">Criar Tarefa</h4>
            </div>
            <form action="./CRUD/criar_tarefa.php" method="GET">
            <div class="modal-body">
                    <label for="titulo">Titulo</label><br>
                    <input type="text" name="titulo"><br>
                    <label for="descricao">descrição</label><br>
                    <input type="text" name="descricao"><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Criar Tarefa</button>
                </div>
            </form>
        </div>
        
        </div>
    </div>
    
    </div>
</div>



<div class="content">

    <div class="container-item">
        <h1 draggable="false" dragstart="false">A fazer</h1>
        <?php include_once "./CRUD/pegar_tarefa.php"; ?>
      
    </div>

    <div class="container-item">
        <h1 draggable="false">Andamento</h1>

    </div>
    <div class="container-item">
        <h1 draggable="false">Concluido</h1>

    </div>
</div>

<script src="index.js"></script>
</body>
</html>