<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Incluir Produto</title>
</head>
<body>
<?php include "menu.php" ?>    
<div class="container">
    <h3>Mensagem</h3>
    
    <p><?php
        $msg = $_GET['msg'];
        echo $msg;
        ?>
    </p>
</div>
</body>
</html>