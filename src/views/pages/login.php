<?php $this->layout('layouts::default'); ?>

<?php $this ->start('main_c'); ?>
<form action="/login/auth" method="post">
    <input name="email">
    <input name="senha">
    <button type="submmit">Enviar</button>
</form>
<?php $this->stop() ?>