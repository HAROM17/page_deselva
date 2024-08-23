<?php  require_once("../../config/conexion.php");
$url = Conectar::ruta();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imágenes de Empresas</title>
    <?php require_once("../modules/head.php") ?>

    <style>
        .company-images {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .company-images img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<?php require_once("../modules/header.php")?>

<body>
    <div class="company-images">
        <img src="../../assets/img/others/foto1.png" alt="Empresa 1">
        <img src="../../assets/img/others/foto2.png" alt="Empresa 2">
        <img src="../../assets/img/others/foto3.png" alt="Empresa 3">
        <img src="../../assets/img/others/foto4.png" alt="Empresa 3">
        <img src="../../assets/img/others/foto5.png" alt="Empresa 3">
        <img src="../../assets/img/others/foto6.png" alt="Empresa 3">
        <img src="../../assets/img/others/foto7.png" alt="Empresa 3">
        <img src="../../assets/img/others/foto1.png" alt="Empresa 3">
        <img src="../../assets/img/others/foto2.png" alt="Empresa 3">
        <img src="../../assets/img/others/foto4.png" alt="Empresa 3">
        <img src="../../assets/img/others/foto5.png" alt="Empresa 3">
        <img src="../../assets/img/others/foto6.png" alt="Empresa 3">
        <img src="../../assets/img/others/foto7.png" alt="Empresa 3">
        <img src="../../assets/img/others/foto1.png" alt="Empresa 3">
        <img src="../../assets/img/others/foto2.png" alt="Empresa 3">
        <img src="../../assets/img/others/foto3.png" alt="Empresa 3">
        <img src="../../assets/img/others/foto4.png" alt="Empresa 3">
        <img src="../../assets/img/others/foto5.png" alt="Empresa 3">
        <img src="../../assets/img/others/foto6.png" alt="Empresa 3">
        <img src="../../assets/img/others/foto7.png" alt="Empresa 3">

        <!-- Agrega más imágenes según sea necesario -->
    </div>
</body>
</html>
<?php  require_once("../../view/modules/footer.php") ?>

