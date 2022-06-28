<?php $this->extend('layout\main.php');?>
<?php $this->section('conteudo'); ?>
<?php echo view ('conteudo/navbar'); ?>
<?php echo view ('conteudo/contCadastrar.php'); ?>


<?php $this->endSection() ?>