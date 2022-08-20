<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Incluir Produto</title>
</head>
<body>
<?php include "menu.php" ?>    
<div class="container">
    <h3>Excluir Produto pelo Código</h3>
    <form method="post" action="../Controle/Controle.php">
    <input type="hidden" name="acao" value="excluir">   
    <div class="form-group">
        <label>Código</label>
        <input type="number" class="form-control" name="codigo" required>
      </div>
      <button type="submit" class="btn btn-primary">Excluir</button>
      <button type="reset" class="btn btn-primary">Limpar</button>
    </form>
</div>
</body>
</html>