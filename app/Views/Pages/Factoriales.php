<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Factoriales</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center text-left">
            <div class="col-6">
                La función factorial es una fórmula matemática representada por el signo de exclamación “!”.<br/>
                En la fórmula Factorial se deben multiplicar todos los números enteros y positivos<br/>
                que hay entre el número que aparece en la fórmula y el número 1. Aqui tienes algunos ejemplos: <br/><br/>
                <?php if (isset($data['factoriales'])) {
                    foreach ($data['factoriales'] as $f) {
                        echo "$f<br/>";
                    }
                } ?>
            </div>
        </div>
    </div>
</section>