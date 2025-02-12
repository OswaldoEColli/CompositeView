<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    
    <?php require_once 'components.php'; ?>
    <?= (new GroupComponent())->render(); ?>
    <h1>Productos</h1>
    <h2>Aquí encontrarás los mejores productos al mejor precio</h2>
    <?= $product ?>
    <p><a href="/">Regresar</a></p>
    
</body>
</html>