<?php $this->tituloPagina = 'Lista de Compras';   ?>

<?php $this->layout('layout.topo'); ?>

<h2>Lista de Detalhes</h2>

    <h3>Título: <?php echo $this->compra->titulo;?></h3>
    <p>Descrição: <?php echo $this->compra->desc;?></p>



<?php $this->layout('layout.rodape');?>


