<?php  require_once("../../config/conexion.php");
$url = Conectar::ruta();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <?php require_once("../modules/head.php") ?>

</head>
<?php require_once("../modules/header.php")?>


<div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="<?php echo $url?>assets/img/bg/logodeselva.jpg" style="background-image: url(&quot;<?php echo $url ?>assets/img/bg/logodeselva.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>iniciar sesion | Registro</h1>
                        <ul>
                            <li><a href="index.html">Home </a></li>
                            <li> // iniciar sesion | Registro</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="login-register-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="login-register-toggle">
                    <button id="btnAccess" class="toggle-btn active" onclick="showLoginForm()">Acceso</button>
                    <button id="btnRegister" class="toggle-btn" onclick="showRegisterForm()">Registro</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="login-form" class="login-form active" action="#">
                    <h4 class="login-title">Acceso</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Correo electrónico</label>
                            <input type="email" placeholder="Correo electrónico">
                        </div>
                        <div class="col-lg-12">
                            <label>Contraseña</label>
                            <input type="password" placeholder="Contraseña">
                        </div>
                        <div class="col-sm-8 align-self-center">
                            <div class="check-box">
                                <input type="checkbox" id="remember_me">
                                <label for="remember_me">Ver contraseña</label>
                            </div>
                        </div>
                        <div class="col-sm-4 pt-1 mt-md-0">
                            <div class="forgotten-password_info">
                                <a href="#">¿Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                        <div class="col-lg-12 pt-5">
                            <button class="btn custom-btn md-size">Acceder</button>
                        </div>
                    </div>
                </form>
                
                <form id="register-form" class="login-form" action="#">
                    <h4 class="login-title">Registro</h4>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <label>Nombre</label>
                            <input type="text" placeholder="Nombre completo">
                        </div>
                        <div class="col-md-6 col-12">
                            <label>Apellido</label>
                            <input type="text" placeholder="Apellido completo">
                        </div>
                        <div class="col-md-12">
                            <label>Correo electrónico</label>
                            <input type="email" placeholder="Correo electrónico">
                        </div>
                        <div class="col-md-6">
                            <label>Contraseña</label>
                            <input type="password" placeholder="Contraseña">
                        </div>
                        <div class="col-md-6">
                            <label>Confirmar contraseña</label>
                            <input type="password" placeholder="Confirmar contraseña">
                        </div>
                        <div class="col-12">
                            <button class="btn custom-btn md-size">Registrarse</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function showLoginForm() {
        document.getElementById('login-form').style.display = 'block';
        document.getElementById('register-form').style.display = 'none';
        document.getElementById('btnAccess').classList.add('active');
        document.getElementById('btnRegister').classList.remove('active');
    }

    function showRegisterForm() {
        document.getElementById('login-form').style.display = 'none';
        document.getElementById('register-form').style.display = 'block';
        document.getElementById('btnAccess').classList.remove('active');
        document.getElementById('btnRegister').classList.add('active');
    }

    // Mostrar el formulario de acceso por defecto al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        showLoginForm();
    });
</script>


    <?php require_once("../../view/modules/footer.php") ?>

    <style>
    .login-register-toggle {
        display: flex;
        justify-content: center;
        margin-bottom: 20px; /* Ajusta el margen inferior según sea necesario */
    }

    .toggle-btn {
        margin: 0 10px; /* Espacio entre los botones */
        padding: 10px 20px; /* Ajusta el padding según sea necesario */
        border: none;
        cursor: pointer;
        background-color: #f0f0f0; /* Color de fondo de los botones */
        border-radius: 5px;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .toggle-btn.active {
        background-color: #007bff; /* Color de fondo activo */
        color: #fff; /* Color de texto activo */
    }
</style>