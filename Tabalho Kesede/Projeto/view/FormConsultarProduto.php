<?php
    require_once("..\model\ProdutoDAO.php");
    require_once("..\model\ProdutoDTO.php");

    include('MenuP.php');

    $dao = new ProdutoDAO();

    if(!isset($_GET['nome_produto'])){
        $produtos = $dao->obter_todos();
    }
    else{
        $produtos = $dao->obter($_GET['id_produto']);
    }

?>
    <h2><center>Produtos Cadastrados</center></h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">Preço de Compra</th>
                <th scope="col">Preço de Venda</th>
                <th scope="col">Lucro</th>
                <th scope="col">Validade</th>
            </tr>
        </thead>
        <tbody>
<?php
    foreach ($produtos as $p) {
        echo "<tr>";
        echo "<td>" . $p->get_id_produto() . "</td>";
        echo "<td>" . $p->get_nome_produto() . "</td>";
        echo "<td>" . $p->get_quantidade() . "</td>";
        echo "<td>" . $p->get_fornecedor() . "</td>";
        echo "<td>" . $p->get_preco_compra() . "</td>";
        echo "<td>" . $p->get_preco_venda() . "</td>";
        echo "<td>" . $p->get_lucro() . "</td>";
        echo "<td>" . $p->get_data_entrega() . "</td>";
        echo "<td><a href = '..\controller\ExcluirProduto.php?codigo=" . $p->get_id_produto() . "'>Excluir</a></td>";
        echo "<td><a href = '../view/FormAlterarProduto.php?codigo=" . $fo->get_id_produto() . "'>Alterar</a></td>";
    }
?>

        </tbody>
    </table>'