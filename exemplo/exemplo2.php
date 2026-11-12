<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ ."/bd/ligacao.php";

$sql = "SELECT * FROM relatos";
$resultados = $bd->query($sql)->fetchAll();

echo  count($resultados);

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com/3.4.17"></script>
    <script src="js/menu.js" defer></script>
</head>
<body>

<?php require __DIR__ . "/inc/header.php"; ?>
  
  



<?php require __DIR__ . "/inc/footer.php"; ?>
<body>
</html>