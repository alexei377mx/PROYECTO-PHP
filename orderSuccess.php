<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Orden</title>
    <meta charset="utf-8">
    <style>
    .container{width: 100%;padding: 50px;}
    p{color: #34a853;font-size: 18px;}
    </style>
</head>
</head>
<body>
<div class="container">
    <h1>Estado de Orden</h1>
    <p>Tu orden se ha realizado con exito.ID Orden es #<?php echo $_GET['id']; ?></p>
</div>
</body>
</html>