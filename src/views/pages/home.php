<?php $this->layout('layouts::default'); ?>

<?php $this->start('main_c') ?>

<h1 class="mt-5">Sejam bem vindos a minha empresa!</p>
<a class="btn btn-secundary d-block m-auto  btn-outline-primary mt-4" style="width: 150px;" href="/about">Sobre nós</a> 
<a class="btn btn-secundary d-block m-auto mt-2 btn-outline-primary" style="width: 150px;" href="/login">Login</a> 
<img class="img-fluid mt-8" alt="Minha imagem" src="<?= $this->asset("img/supermercado.png")?>" alt="imagem">

<?php $this->stop() ?>

<?php $this->start('footer_c') ?>
<div class="bg-dark text-white text-center py-3 fixed-bottom">
  <p class="mb-0">© 2025 Minha Empresa — Todos os direitos reservados.</p>
</div>
<?php $this->stop() ?>

<!-- <?php $this ->start('style')?>
<link href="<?= $this->asset('css/home.css');?>" rel="stylesheet" >
<?php $this ->stop();?> -->