<?php
//Incluindo a classe Produto
require_once ('Produto.php');
require_once ('BancoDados.php');


class ProdutoDAO{

public function Produto($codigo,$nome,$categoria,$valor){
    $this->codigo = $codigo ;
    $this->nome = $nome;
    $this->categoria = $categoria;
    $this->valor = $valor;
}    
  
 public function salvar(Produto $produto) {
    try {
    $conexao = BancoDados::Conectar();    
    $stmt = $conexao->prepare('INSERT INTO produto VALUES(NULL,:nome,:categoria,:valor)');
    $stmt->execute(array(
        ':nome' => $produto->getNome(),
        ':categoria' => $produto->getCategoria(),    
        ':valor' => $produto->getValor()    
    ));
    header('Location: ../Visao/mensagem.php?msg=Produto cadastrado');
        }catch(PDOException $erro) {
            header('Location: ../Visao/mensagem.php?msg=Ocorreu um erro');
        }
    }
  
 
public function ListarTodos() {
    $conexao = BancoDados::Conectar();
    $stmt = $conexao->query('SELECT * FROM produto');
        echo "<p><h1> Consultando todos os Produtos</h1>";
        echo "<p><table border='1px solid black'>";
        echo "<tr>
        <th> Código </th>
        <th> Nome </th>
        <th> Categoria </th>
        <th> Valor </th>
        </tr>";
    while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "
        <tr>
        <td> {$linha['codigo']} </td>
        <td> {$linha['nome']} </td>
        <td> {$linha['categoria']} </td>
        <td> {$linha['valor']} </td>
        </tr>
        ";
    }
        echo "</table>";
        echo "<p><input type='button' class='btn btn-primary' value='Voltar' onclick='history.back()'>";
    }
  
 public function ListarNome($nome) {
    $conexao = BancoDados::Conectar();
    $stmt = $conexao->prepare("SELECT * FROM produto WHERE nome = :nome");
    $stmt->execute(array(
    ':nome' => $nome,
));
                                        
    echo "<p><h1> Consultando Produtos pelo Nome = $nome</h1>";
    echo "<p><table border='1px solid black'>";
    echo "<tr>
    <th> Código </th>
    <th> Nome </th>
    <th> Categoria </th>
    <th> Valor </th>
    </tr>";
while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "
    <tr>
    <td> {$linha['codigo']} </td>
    <td> {$linha['nome']} </td>
    <td> {$linha['categoria']} </td>
    <td> {$linha['valor']} </td>
    </tr>
    ";
    }
    echo "</table>";
    echo "<p><input type='button' class='btn btn-primary' value='Voltar' onclick='history.back()'>";

 } 
    
 public function Remover($codigo) {
    try {
    $conexao = BancoDados::Conectar();
    $stmt = $conexao->prepare("DELETE FROM produto WHERE codigo = :codigo");
    $stmt->execute(array(
        ':codigo' => $codigo,
    ));
        header('Location: ../Visao/mensagem.php?msg=Produto apagado');
            } catch(PDOException $erro) {
        header('Location: ../Visao/mensagem.php?msg=Ocorreu um erro');
        }
    }    
    
    public function Atualizar($codigo,$nome,$categoria,$valor) {
    try{
        $conexao = BancoDados::Conectar();    
        $stmt = $conexao->prepare('UPDATE produto SET nome=:nome, categoria=:categoria,valor=:valor WHERE codigo=:codigo ');
        $stmt->execute(array(
            ':codigo' => $codigo,
            ':nome' => $nome,
            ':categoria' => $categoria,    
            ':valor' => $valor    
        ));
    header('Location: ../Visao/mensagem.php?msg=Produto atualizado');
        } catch(PDOException $erro) {
    header('Location: ../Visao/mensagem.php?msg=Ocorreu um erro');
        }
    }
  
}
 
?>