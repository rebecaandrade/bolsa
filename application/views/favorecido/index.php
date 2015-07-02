<?php $this->load->view('_inc/header')?>

<?php foreach ($favorecidos as $favorecido): ?>
        <?php echo(get_object_vars ($favorecido)['Nome Favorecido'])?><br>
<?php endforeach ?>
<hr />

<?php
    echo $paginacao;
    $this->load->view('_inc/footer')
?>