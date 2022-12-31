<!--build:js-->
<script src="assets/js/vendors/jquery-3.5.1.min.js"></script>
<script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
<script src="assets/js/vendors/bootstrap-slider.min.js"></script>
<script src="assets/js/vendors/jquery.countdown.min.js"></script>
<script src="assets/js/vendors/jquery.easing.min.js"></script>
<script src="assets/js/vendors/owl.carousel.min.js"></script>
<script src="assets/js/vendors/validator.min.js"></script>
<script src="assets/js/vendors/jquery.waypoints.min.js"></script>
<script src="assets/js/vendors/jquery.rcounterup.js"></script>
<script src="assets/js/vendors/magnific-popup.min.js"></script>
<script src="assets/js/vendors/hs.megamenu.js"></script>
<script src="assets/js/app.js"></script>
<!--endbuild-->

<script>
    // $(function() {
    //     $("li").click(function() {
    //         // remove classes from all
    //         $("li").removeClass("active");
    //         // add class to the one we clicked
    //         $(this).addClass("active");
    //     });
    // });

    var get = [];
    location.search.replace('?', '').split('&').forEach(function(val) {
        split = val.split('+', 2);
        get[split[0]] = split[1];
    });

    var url = window.location;
    $('ul li a[href="' + url + '"]').parent().addClass('active');
    // console.log(url);
</script>
