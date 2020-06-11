<?php
    require_once("..\model\FuncionarioDAO.php");
    require_once("..\model\FuncionarioDTO.php");

    include('MenuP.php');

    $dao = new FuncionarioDAO();

    if(!isset($_GET['nome_funcionario'])){
        $funcionarios = $dao->obter_todos();
    }
    else{
        $funcionarios = $dao->obter($_GET['id_funcionario']);
    }

?>
    <h2><center>Funcionários Cadastrados</center></h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Contato</th>
                <th scope="col">Endereço</th>
                <th scope="col">Data de nascimento</th>
                <th scope="col">RG</th>
                <th scope="col">CPF</th>
                <th scope="col">Cargo</th>
                <th scope="col">Salário</th>
            </tr>
        </thead>
        <tbody>
<?php
    foreach ($funcionario as $fu) {
        echo "<tr>";
        echo "<td>" . $fu->get_id_funcionario() . "</td>";
        echo "<td>" . $fu->get_nome_funcionario() . "</td>";
        echo "<td>" . $fu->get_contato_funcionario() . "</td>";
        echo "<td>" . $fu->get_endereco_funcionario() . "</td>";
        echo "<td>" . $fu->get_data_nascimento() . "</td>";
        echo "<td>" . $fu->get_rg_funcionario() . "</td>";
        echo "<td>" . $fu->get_cpf_funcionario() . "</td>";
        echo "<td>" . $fu->get_cargo() . "</td>";
        echo "<td>" . $fu->get_salario() . "</td>";
        echo "<td><a href = '..\controller\ExcluirFuncionario.php?codigo=" . $p->get_id_funcionario() . "'>Excluir</a></td>";
        echo "<td><a href = '../view/FormAlterarFuncionario.php?codigo=" . $p->get_id_funcionario() . "'>Alterar</a></td>";
    }
?>

        </tbody>
    </table>'