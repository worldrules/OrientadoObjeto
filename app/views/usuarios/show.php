<?php $this->tituloPagina = 'Lista de Usuários';   ?>

<?php $this->layout('layout.topo'); ?>

<h2>Lista de Detalhes</h2>

    <h3>Nome: <?php echo $this->modelo->nome;?></h3>
    <p>Email: <?php echo $this->modelo->email;?></p>



<?php $this->layout('layout.rodape');?>


