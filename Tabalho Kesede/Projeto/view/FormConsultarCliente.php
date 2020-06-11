<?php
    require_once("..\model\ClienteDAO.php");
    require_once("..\model\ClienteDTO.php");

    include('MenuP.php');

    $dao = new ClienteDAO();

    if(!isset($_GET['nome_cliente'])){
        $clientes = $dao->obter_todos();
    }
    else{
        $clientes = $dao->obter($_GET['id_cliente']);
    }

?>
    <h2><center>Clientes Cadastrados</center></h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Contato</th>
                <th scope="col">Endereço</th>
                <th scope="col">Saldo</th>
            </tr>
        </thead>
        <tbody>
<?php
    foreach ($clientes as $ci) {
        echo "<tr>";
        echo "<td>" . $ci->get_id_cliente() . "</td>";
        echo "<td>" . $ci->get_nome_cliente() . "</td>";
        echo "<td>" . $ci->get_contato_cliente() . "</td>";
        echo "<td>" . $ci->get_endereco_cliente() . "</td>";
        echo "<td>" . $p->get_saldo() . "</td>";
        echo "<td><a href = '..\controller\ExcluirCliente.php?codigo=" . $ci->get_id_cliente() . "'>Excluir</a></td>";
        echo "<td><a href = '../view/FormAlterarCliente.php?codigo=" . $ci->get_id_cliente() . "'>Alterar</a></td>";
    }
?>

        </tbody>
    </table>'