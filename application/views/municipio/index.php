<?php $this->load->view('_inc/header')?>

<?php foreach ($municipios as $municipio): ?>
        <?php echo(get_object_vars ($municipio)['Nome Municipio'])?><br>
<?php endforeach ?>
<hr />

<?php
    echo $paginacao;
    $this->load->view('_inc/footer')
?>