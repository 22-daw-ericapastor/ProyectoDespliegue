<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Fechas</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center text-center">
            <div class="col-10">
                <form id="dates_submit" method="POST">
                    <?php if (isset($data['datediff']) && isset($data['date1']) && isset($data['date2'])) {
                        echo "<div class='was-validated p-4'>La diferencia entre " . $data['date1'] . " y " . $data['date2'] . " es: " . $data['datediff'] . "</div>";
                    } ?>
                    <!-- Date 1 input -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="origin_date" name="origin_date" type="text"
                               placeholder="07/12/1995"
                               data-sb-validations="required"/>
                        <label for="origin_date">Fecha de inicio (ej 07/12/1995)</label>
                    </div>
                    <!-- Date 2 input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="final_date" name="final_date" type="text"
                               placeholder="31/05/2001"
                               data-sb-validations="required"/>
                        <label for="final_date">Fecha de fin ej (31/05/2001)</label>
                    </div>
                    <div id="d2-error" class="invalid-feedback"></div>
                    <!-- Submit Button-->
                    <button class="btn btn-primary btn-xl disabled" id="dateBtn" type="submit">Comprobar</button>
                    <?php if (isset($data['error'])) {
                        echo "<div class='was-validated p-4'>El formato de la fecha no es valido</div>";
                    } ?>
                </form>
            </div>
        </div>
    </div>
</section>