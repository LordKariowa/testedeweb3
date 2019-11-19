<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Programa - Teste </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <div class = "container">
    <form method = "post" action = "soma.php">
        <div class="form-group">
            <label for="t1">Valor de T1</label>
            <input type="number" class="form-control" id="t1" name = "t1">
        </div>
        <div class="form-group">
            <label for="t2">Valor de T2</label>
            <input type="number" class="form-control" id="t2" name = "t2">
        </div>
        <div class="form-group">
            <label for="t3">Valor de T3</label>
            <input type="number" class="form-control" id="t3" name = "t3">
        </div>
        <div class="form-group">
            <label for="t4">Valor de T4</label>
            <input type="number" class="form-control" id="t4" name = "t4">
        </div>
        <button type="submit" class="btn btn-primary">Verificar</button>
    </form>
</div>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>