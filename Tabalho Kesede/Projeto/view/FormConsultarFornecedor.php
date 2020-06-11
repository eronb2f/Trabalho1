<?php
    require_once("..\model\FornecedorDAO.php");
    require_once("..\model\FornecedorDTO.php");

    include('MenuP.php');

    $dao = new FornecedorDAO();

    if(!isset($_GET['nome_fornecedor'])){
        $fornecedor = $dao->obter_todos();
    }
    else{
        $fornecedor = $dao->obter($_GET['id_fornecedor']);
    }

?>
    <h2><center>Fornecedores Cadastrados</center></h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Contato</th>
                <th scope="col">Localização</th>
                <th scope="col">Data de Entrega</th>
            </tr>
        </thead>
        <tbody>
<?php
    foreach ($fornecedor as $fo) {
        echo "<tr>";
        echo "<td>" . $fo->get_id_fornecedor() . "</td>";
        echo "<td>" . $fo->get_nome_fornecedor() . "</td>";
        echo "<td>" . $fo->get_contato_fornecedor() . "</td>";
        echo "<td>" . $fo->get_localizacao() . "</td>";
        echo "<td>" . $fo->get_data_entrega() . "</td>";
        echo "<td><a href = '..\controller\ExcluirFornecedor.php?codigo=" . $fo->get_id_fornecedor() . "'>Excluir</a></td>";
        echo "<td><a href = '../view/FormAlterarFornecedor.php?codigo=" . $fo->get_id_fornecedor() . "'>Alterar</a></td>";
    }
?>

        </tbody>
    </table>'