<?php $this->load->view('_inc/header')?>
<table class="table">
    <tr>
        <th>NIS</th>
        <th>Nome</th>
        <th>Município</th>
    </tr>
    <?php foreach ($favorecidos as $favorecido): ?>
            <tr>
                <td><?php echo(get_object_vars ($favorecido)['NIS Favorecido'])?></td>
                <td><?php echo(get_object_vars ($favorecido)['Nome Favorecido'])?></td>
                <td><?php echo(get_object_vars ($favorecido)['Código SIAFI Município'])?></td>
            </tr>
    <?php endforeach ?>
    <hr />
</table>
<?php
    echo $paginacao;
    $this->load->view('_inc/footer')
?>