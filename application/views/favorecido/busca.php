<?php $this->load->view('_inc/header')?>

<form action='/bolsa/index.php/favorecido/buscar' method="post">
    Nome: <input type='text' name='nome'>
    <input type='submit' value='Buscar'>
</form>

<?php $this->load->view('_inc/footer') ?>