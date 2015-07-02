<?php $this->load->view('_inc/header')?>

<?php foreach ($parcelas as $parcela): ?>
        <?php echo(get_object_vars ($parcela)['Valor Parcela'])?><br>
<?php endforeach ?>
<hr />

<?php
    echo $paginacao;
    $this->load->view('_inc/footer')
?>