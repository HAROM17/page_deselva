<div class="hero_banner_section d-flex align-items-center mb-110">
    <div class="container">
        <div class="hero_banner_inner">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="hero_content">
                        <h3 class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s"></h3>
                        <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">Productos de calidad Artículos de panadería</h1>
                        <a class="btn btn-link wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s" href="view/producto">comprar ahora</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero_shape_banner">
                        <img class="banner_keyframes_animation wow" src="assets/img/logo/logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero_mini_shape shape1">
        <img src="assets/img/others/hero-mini-shape1.png" alt="">
    </div>
    <div class="hero_mini_shape shape2">
        <img src="assets/img/others/hero-mini-shape2.png" alt="">
    </div>
    <div class="hero_mini_shape shape3">
        <img src="assets/img/others/hero-mini-shape3.png" alt="">
    </div>
    <div class="hero_mini_shape shape4">
        <img src="assets/img/others/hero-mini-shape4.png" alt="">
    </div>
    <div class="hero_mini_shape shape5">
        <img src="assets/img/others/hero-mini-shape5.png" alt="">
    </div>
</div>

<style>
.hero_banner_section {
    position: relative; /* Asegura que la posición de los elementos internos se mantenga */
    z-index: 0; /* Asegura que el contenido esté por encima del fondo */
}

.hero_banner_section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('assets/img/bg/logodeselva.png'); /* Reemplaza con la ruta de tu nueva imagen */
    background-size: cover; /* Ajusta la imagen para cubrir completamente la sección */
    background-position: center; /* Centra la imagen en la sección */
    background-repeat: no-repeat; /* Evita que la imagen se repita */
    z-index: -1; /* Coloca la imagen de fondo detrás del contenido */
    opacity: 0.8; /* Ajusta la opacidad según lo necesario */
}
</style>