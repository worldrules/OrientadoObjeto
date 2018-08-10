<?php $this->tituloPagina = 'Home';   ?>

<?php include dirname(__FILE__,2).'/layout/topo.php' //Only in php 7, volta 2 pastas ?>

<h2>Essa é a página principal</h2>
<p>Lista de Compras</p>

<ul>
    <?php foreach ($this->compras as $item => $value): ?>
        <li><?php echo $value['titulo']?> - <?php echo $value['desc']?></li>
    <?php endforeach ?>
</ul>

<?php include dirname(__FILE__,2).'/layout/rodape.php' //Only in php 7, volta 2 pastas ?>


