<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <?php require_once 'components.php'; ?>
    <?= (new GroupComponent())->render(); ?>
    <h1>Contacto</h1>
    
    
    <?= $contact?>
    <p><a href="/">Regresar</a></p>
    
</body>
</html>