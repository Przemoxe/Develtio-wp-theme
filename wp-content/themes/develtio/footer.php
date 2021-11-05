<?php wp_footer(); ?>

<footer class="footer-section">
    <div class="container-footer">
        
        <div class="container text-white">
            <div class="row gx-2" >
                <div class="col-md-3 col-sm-6 pb-5 pb-xl-0 " >
                    <h5>Menu</h5>
                    <p class="m-0 active">Strona główna</p>
                    <p class="m-0">O nas</p>
                    <p class="m-0">Dołącz do nas</p>
                    <p class="m-0">Zostań Agentem</p>
                    <p class="m-0">Kariera</p>
                </div>
                <div class="col-md-3 col-sm-6 pb-5 pb-xl-0" >
                    <h5>Ubezpieczenia</h5>
                    <p class="m-0">Ubezpieczenia mienia, nieruchomości</p>
                    <p class="m-0">Ubezpieczenia osobowe</p>
                    <p class="m-0">Ubezpieczenia rolne</p>
                    <p class="m-0">Ubezpieczenie OC</p>
                    <p class="m-0">Zobacz pełną ofertę</p>
                </div>
                <div class="col-md-3 col-sm-6 pb-5 pb-xl-0" >
                    <h5>Pomoc</h5>
                    <p class="m-0">Oddziały/Kontakt</p>
                    <p class="m-0">Towarzystwa ubezpieczeniowe</p>
                    <p class="m-0">Przydatne materiały</p>
                    <p class="m-0">Informacje Administracyjne</p>
                    <p class="m-0">Polityka cookies</p>
                </div>
                <div class="col-md-3 col-sm-6 pb-5 pb-xl-0" >
                    <h5>Infolinia</h5>
                    <a href="tel:<?php echo get_theme_mod('nr_contact'); ?>"> <?php echo get_theme_mod('nr_contact') ?: 'Kliknij Dostosuj w edycji strony i zmień nr w stopce'  ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>