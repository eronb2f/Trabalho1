<?php
    require_once("..\model\GastosDAO.php");
    require_once("..\model\GastosDTO.php");

    include('MenuP.php');

    $dao = new GastosDAO();

    if(!isset($_GET['tipo'])){
        $gastos = $dao->obter_todos();
    }
    else{
        $gastos = $dao->obter($_GET['id_gastos']);
    }

?>
    <h2><center>Gastos Cadastrados</center></h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Tipo</th>
                <th scope="col">Empresa</th>
                <th scope="col">Valor</th>
                <th scope="col">Vencimento</th>
            </tr>
        </thead>
        <tbody>
<?php
    foreach ($gastos as $g) {
        echo "<tr>";
        echo "<td>" . $g->get_id_gastos() . "</td>";
        echo "<td>" . $g->get_tipo() . "</td>";
        echo "<td>" . $g->get_empresa() . "</td>";
        echo "<td>" . $g->get_valor() . "</td>";
        echo "<td>" . $g->get_vencimento() . "</td>";
        echo "<td><a href = '..\controller\ExcluirGastos.php?codigo=" . $p->get_id_gastos() . "'>Excluir</a></td>";
        echo "<td><a href = '../view/FormAlterarGastos.php?codigo=" . $p->get_id_gastos() . "'>Alterar</a></td>";
    }
?>

        </tbody>
    </table>'