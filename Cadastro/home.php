<?php
//Iniciar Sessao
session_start();
if(isset($_SESSION['mensagem'])): ?>
<script>
    //Mensagem de cadastro
window.onload = function() {
    M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
};
</script>
<?php
endif;
session_unset();

//Conexao
include_once 'conexao.php';
//Header
include_once 'header.php';

?>

<h3 class="light">Clientes</h3>
<div class="row">
    <div class="col 12 m6 push-m3">
    <table class="striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>email</th>
                <td>Idade</td>
                
            </tr>
        </thead>
            <tbody>
            <?php
            //Mostra a tabela clientes
            $sql = "SELECT * FROM clientes";
            $resultado = mysqli_query($conn,$sql);
            while($dados = mysqli_fetch_array($resultado)):
            ?>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['sobrenome']; ?></td>
                    <td><?php echo $dados['email']; ?> </td>
                    <td><?php echo $dados['idade']; ?> </td>
                    <td><a href="alterar.php?id=<?php echo $dados['id']; ?>" class="btn-floating blue"><i class="material-icons">border_color</i></a></td>
                <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">close</i></a></td>
                
                <div id="modal<?php echo $dados['id']; ?>" class="modal">
                <div class="modal-content">
                <h4>Alerta!!</h4>
                 <p>Tem certeza que deseja excluir?</p>
                 </div>
                <div class="modal-footer">
                    <form action="deletar.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                    <button type="submit" name="btn-deletar" class="btn dark">Confirmar
                    </button>
                    </form>
   
    </div>
  </div>
            </tbody>
            <?php endwhile; ?>
    </table>
    <br>

    <a href="adicionar.php" class="btn">Adicionar Cliente</a>
    <a onclick="M.toast({html: 'I am a toast'})" class="btn">Toast!</a>

</div>
    </div>

<?php
//Footer
include_once 'footer.php';

?>