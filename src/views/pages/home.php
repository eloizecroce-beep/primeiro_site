<?php $this->layout('layouts::default'); ?>

<?php $this->start('main_c') ?>
<h1>Olá!</h1>
<p>Sejam bem vindos ao meu primeiro site!</p>
<a class="btn btn-secundary d-block m-auto mt-2 btn-outline-primary" style="width: 150px;" href="/about">Sobre nós</a> 
<a class="btn btn-secundary d-block m-auto mt-2 btn-outline-primary" style="width: 150px;" href="/login">Login</a> 
<img src="<?= $this->asset("img/personagem.webp")?>" alt="imagem">

<?php $this->stop() ?>

<?php $this->start('footer_c') ?>
<p>Eloize.com</p>
<?php $this->stop() ?>

<!-- <?php $this ->start('style')?>
<link href="<?= $this->asset('css/home.css');?>" rel="stylesheet" >
<?php $this ->stop();?> -->