<?php $this->tituloPagina = 'Lista de Usuários';   ?>

<?php $this->layout('layout.topo'); ?>

    <div class="row">
    <h2>Lista de Usuários</h2>
    </div>


    <div class="row">
    <a href="/usuarios/adicionar">Criar</a>
    </div>


    <div class="row">

    <ul>
        <?php foreach ($this->modelo as $key => $value): ?>
            <li><?php echo $value['nome']?> - <?php echo $value['email']?>

                <form action="/usuarios/deletar/<?php echo $value['id']?>" method="post">
                <input type="hidden" name="_METHOD" value="delete">
                <a href="/usuarios/detalhe/<?php echo $value['id']?>"><button class="btn btn-primary" type="button" name="button">Detalhe</button></a>
                <a href="/usuarios/editar/<?php echo $value['id']?>"><button class="btn btn-primary" type="button" name="button">Editar</button></a>

                        <button class="btn btn-primary">Deletar</button>
                </form>
            </li>
        <?php endforeach ?>
    </ul>
    </div>


<?php $this->layout('layout.rodape');?>


