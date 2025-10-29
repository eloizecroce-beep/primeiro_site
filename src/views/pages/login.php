<?php $this->layout('layouts::default'); ?>

<?php $this ->start('main_c'); ?>
<form action="/login/auth" method="post">
    <input name="email">
    <input name="senha">
    <button type="submmit">Enviar</button>
</form>
<?php $this->stop() ?>

<!-- <?php $this ->start('style')?>
<link href="<?= $this->asset('css/login.css');?>" rel="stylesheet" >
<?php $this ->stop();?> -->

<!-- <?php $this ->start('scripts')?>
<script>
    function Breno (){
        alert('Olá mundo!')
    }
</script>
<?php $this ->stop();?> 