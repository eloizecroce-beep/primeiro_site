<?php $this->layout('layouts::default'); ?>

<?php $this->start('main_c'); ?>
<form>
  <h1 class="fs-2 fw-bold mt-2 text-start text-warning">Sobre nós:</h1>
  
  <h3 class="mt-5 text-danger">Minha Localização</h3>

  <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.123456789!2d-46.67890!3d-23.56123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59b123456789%3A0xabcdef123456789!2sEndereço!"
    width="600" 
    height="450" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy">
  </iframe>
  <br>
  <input class= "mt-5" name="email">
    <input name="senha">
    <button type="submmit">Enviar</button>
 <br>

</form>
<?php $this->stop() ?>

<!-- <?php $this ->start('style')?>
<link href="<?= $this->asset('css/about.css');?>" rel="stylesheet" >
<?php $this ->stop();?> -->