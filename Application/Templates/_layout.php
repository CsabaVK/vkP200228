<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= APP ?>Style/style.css" text="text/css">
</head>
<body>
    
    <?php require_once APP . 'Templates/headerView.php' ?>
    <?php require_once APP . "Templates/{$page}View.php" ?>

</body>
</html>