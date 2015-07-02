<?php $this->load->view('_inc/header')?>
<table class="table">
    <tr>
        <th>Mes</th>
        <th>Valor</th>
        <th>Fonte-Finalidade</th>
        <th>Programa</th>
        <th>NIS</th>
    </tr>
    <?php foreach ($favorecidos as $favorecido): ?>
            <tr>
                <td><?php echo(get_object_vars ($parcela)['Mês Competência'])?></td>
                <td><?php echo(get_object_vars ($parcela)['Valor Parcela'])?></td>
                <td><?php echo(get_object_vars ($parcela)['Fonte-Finalidade'])?></td>
                <td><?php echo(get_object_vars ($parcela)['Código Programa'])?></td>
                <td><?php echo(get_object_vars ($parcela)['NIS Favorecido'])?></td>
            </tr>
    <?php endforeach ?>
    <hr />
</table>
<?php
    echo $paginacao;
    $this->load->view('_inc/footer')
?>