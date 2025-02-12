<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php require_once 'components.php'; ?>
    <?= (new GroupComponent())->render(); ?>
    <h1>Home</h1>
    
    
    <p><?= $home ?></p>
    <p><a href="/?page=contact">¿Dudas o comentarios? Déjanos saber</a></p>
    <p><a href="/?page=product">Para conocer los productos haz clic aquí</a></p>
    

</body>
</html>