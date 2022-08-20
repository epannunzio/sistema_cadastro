<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Incluir Produto</title>
</head>
<body>
<?php include "menu.php" ?>    
<div class="container">
    <h3>Listar Produto pelo Nome</h3>
    <form method="post" action="../Controle/Controle.php">
    <input type="hidden" name="acao" value="listar">   
    <div class="form-group">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" required>
      </div>
      <button type="submit" class="btn btn-primary">Buscar</button>
      <button type="reset" class="btn btn-primary">Limpar</button>
    </form>
</div>
</body>
</html>