<?php
    require_once('..\model\ContatoDAO.php');
    require_once('..\model\ContatoDTO.php');

    include('MenuP.php');

    $dao = new ContatoDAO();

    if(!isset($_GET['nome_contato'])){
        $contatos = $dao->obter_todos();
    }
    else{
        $contatos = $dao->obter($_GET['id_contato']);
    }

?>
    <h2><center>Contato Cadastrados</center></h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Telefone comercial</th>
                <th scope="col">Telefone celular</th>
                <th scope="col">Email</th>

            </tr>
        </thead>
        <tbody>
<?php
    foreach ($contatos as $co) {
        echo "<tr>";
        echo "<td>" . $co->get_id_contato() . "</td>";
        echo "<td>" . $co->get_telefone_comercial() . "</td>";
        echo "<td>" . $co->get_telefone_celular() . "</td>";
        echo "<td>" . $co->get_email() . "</td>";
        echo "<td><a href = 'controller\ExcluirContato.php?codigo=" . $co->get_id_contato() . "'>Excluir</a></td>";
        echo "<td><a href = 'view\FormAlterarContato.php?codigo=" . $co->get_id_contato() . "'>Alterar</a></td>";
    }
?>

        </tbody>
    </table>'