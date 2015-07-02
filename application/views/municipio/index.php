<?php $this->load->view('_inc/header')?>
<table class="table">
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>UF</th>
    </tr>

    <?php foreach ($municipios as $municipio): ?>
            <tr>
                <td><?php echo(get_object_vars ($municipio)['Código SIAFI Município'])?></td>
                <td><?php echo(get_object_vars ($municipio)['Nome Município'])?></td>
                <td><?php echo(get_object_vars ($municipio)['UF'])?></td>
            </tr>
    <?php endforeach ?>
    <hr />
</table>


<?php
    echo $paginacao;
    $this->load->view('_inc/footer')
?>