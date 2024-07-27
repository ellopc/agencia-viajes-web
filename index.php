<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Agencia de Viajes</title>
</head>
<body>
    <?php include 'includes/notificaciones.php';?>
    <?php include 'forms/formularios.php';?>
    <?php include 'procesar_formulario.php';?>

    <?php if (isset($_SESSION['notificacion'])): ?>
        <script>
            alert('<?php echo $_SESSION['notificacion']; ?>');
            <?php unset($_SESSION['notificacion']); ?>
        </script>
    <?php endif; ?>
    <script src="script.js"></script>

    <?php if (isset($_GET['msg'])):?>
  <div class="alert alert-success"><?= $_GET['msg']?></div>
    <?php endif;?>

</body>
</html>