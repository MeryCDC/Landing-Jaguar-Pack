<!-- Footer section -->
<footer class="footer-section">
    <div class="container">
        <div class="footer-bottom">
            <div class="row">
                <div class="col-lg-4 store-links text-center text-lg-left pb-3 pb-lg-0">
                    <p>Jaguar Pack</p>
                    <!-- <a href=""><img src="img/appstore.png" alt="" class="mr-2"></a>
                    <a href=""><img src="img/playstore.png" alt=""></a> -->
                </div>
                <div class="col-lg-8 text-center text-lg-right">
                    <ul class="footer-nav">
                        <li><a href="">Terminos y Uso</a></li>
                        <li><a href="tel:8677141102">(867)714-11-02</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="assets/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/bootstrap4/js/bootstrap.min.js"></script>
<script src="assets/codigo.js"></script>
<script>
$('.responsive-bar-sistema').on('click', function(event) {
    $('.main-menu').slideToggle(400);
    event.preventDefault();
});

$("a[data-toggle='tooltip']").tooltip();
</script>
</body>