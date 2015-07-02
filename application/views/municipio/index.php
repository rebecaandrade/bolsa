
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>Listar</title>
</head>
<body>
<h1>listar!</h1>
<?php foreach ($municipios as $municipio): ?>
        <?php echo(get_object_vars ($municipio)['Nome Municipio'])?><br>
<?php endforeach ?>
<hr />
<?php
echo $paginacao;
?>
</body>
</html>