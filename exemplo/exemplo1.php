<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com/3.4.17"></script>
</head>
<body>
    
<?php 
    $titulo = "Título da Página";
    $opcoes = ["Exemplo 11", "Avaria 22", "Teste 3"];
?>


<div class="max-w-4xl mx-auto text-3xl text-center">
    <?php echo $titulo ?>
</div>

<div class="max-w-4xl mx-auto text-3xl text-center">



<select name="" id="">
    <option value="">-- selecione uma opção --</option>
    
    <?php foreach($opcoes as $opcao): ?>
        <option value=""><?php echo $opcao ?> </option>
    <?php endforeach ?>


</select>

</div>


</body>
</html>