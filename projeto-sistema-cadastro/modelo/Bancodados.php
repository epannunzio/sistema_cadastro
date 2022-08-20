<?php

class BancoDados extends PDO {
    public static function Conectar() {
        try {
            $usuario = 'root';
            $senha = '';
            $banco = 'bd';
            $caminho = 'localhost';
            $conn = new PDO('mysql:host='.$caminho.';dbname='.$banco, $usuario, $senha);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Conectado com sucesso!";
            return $conn;
        } catch(PDOException $erro) {
            echo 'Ocorreu o seguinte erro: ' . $erro->getMessage();
        }
    }
}