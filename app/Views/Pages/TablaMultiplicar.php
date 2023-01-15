<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Tablas de Multiplicar</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center text-center">
            <div class="col-10">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <?php for ($a = 1; $a <= 10; $a++): ?>
                            <td>Tabla del <?= $a ?></td>
                        <?php endfor; ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php for ($a = 1; $a <= 10; $a++): ?>
                        <tr>
                            <?php for ($b = 1; $b <= 10; $b++): ?>
                                <td><?= $b . ' * ' . $a . ' = ' . $a * $b; ?></td>
                            <?php endfor; ?>
                        </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>