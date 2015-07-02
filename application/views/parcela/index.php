<?php $this->load->view('_inc/header')?>

Soma total das parcelas: <?php echo($parcelassoma[0]->ValorParcela) ?><br>
Media das parcelas: <?php echo($parcelasmedia[0]->ValorParcela) ?><br>
Parcela de EVERALDO PEREIRA SOUSA: <?php echo($parcelaspessoa[0]->ValorParcela) ?><br>
Parcela Minima: <?php echo($parcelasminimia[0]->ValorParcela) ?><br>
Parcela Máxima: <?php echo($parcelasmaxima[0]->ValorParcela) ?><br>

<table class="table">
    <tr>
        <th>Mes</th>
        <th>Valor</th>
        <th>Fonte-Finalidade</th>
        <th>Programa</th>
        <th>NIS</th>
    </tr>
    <?php foreach ($parcelas as $parcela): ?>
            <tr>
                <td><?php echo(get_object_vars ($parcela)['Mês Competência'])?></td>
                <td><?php echo(get_object_vars ($parcela)['ValorParcela'])?></td>
                <td><?php echo(get_object_vars ($parcela)['Fonte-Finalidade'])?></td>
                <td><?php echo(get_object_vars ($parcela)['Código Programa'])?></td>
                <td><?php echo(get_object_vars ($parcela)['NISFavorecido'])?></td>
            </tr>
    <?php endforeach ?>
    <hr />
</table>
<?php
    echo $paginacao;
    $this->load->view('_inc/footer')
?>