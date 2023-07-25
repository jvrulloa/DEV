<!-- footer -->
<!-- ============================================================== -->
<footer class="footer">
  © 2015-2023 Cotizador web desarrollado por <a href='#' target='_blank'>#</a>
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- All Jquery -->
<!-- ============================================================== -->
<!--<script src="assets/plugins/jquery/jquery.min.js"></script>   <script src="assets/plugins/jquery/jquery.js"></script> -->
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/mdb-bootstrap/js/mdb.min.js"></script>
<script src="assets/plugins/bootstrap530/dist/js/bootstrap.min.js"></script>
<script src="assets/plugins/bootstrap530/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/bootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="jquery-validation/lib/jquery-3.1.1.js"></script>
<script type="text/javascript" src="jquery-validation/dist/jquery.validate.js"></script>
<!-- <script src="assets/plugins/select2/vendor/qunit-1.23.1.js" type="text/javascript"></script>assets/plugins/select2/src/js/select2/data/select.js
<script src="assets/plugins/select2/vendor/jquery-3.4.1.js" type="text/javascript"></script> -->
<script src="assets/plugins/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="assets/plugins/select2/src/js/select2/data/select.js" type="text/javascript"></script>
<script src="assets/plugins/select2/src/js/select2/data/tags.js" type="text/javascript"></script>
<script src="assets/plugins/select2/src/js/select2/data/core.js" type="text/javascript"></script>
<!-- <script src="assets/plugins/select2/src/js/select2/data/defaults.js" type="text/javascript"></script> -->
<script src="assets/plugins/select2/src/js/select2/data/result.js" type="text/javascript"></script>
<script src="assets/plugins/select2/tests/utils/decorator-tests.js" type="text/javascript"></script>
<script src="assets/plugins/select2/tests/utils/data-tests.js" type="text/javascript"></script>
<!-- <script src="assets/plugins/select2/src/js/select2/data/select.js" type="text/assets\plugins\select2\src\js\select2\defaults.jsjavascript"></script> -->
<!-- <script src="assets/plugins/select2/tests/helpers.js" type="text/javascript"></script> -->
<!-- <script src="assets/plugins/select2/tests/integration/dom-changes.js" type="text/javascript"></script> -->
<!-- <script src="assets/plugins/select2/tests/integration/jquery-calls.js" type="text/javascript"></script> -->
<!-- <script src="assets/plugins/select2/tests/integration/select2-methods.js" type="text/javascript"></script> -->
<!-- <script src="assets/plugins/select2/select2.full.js"></script>
<script src="assets/plugins/select2/select2.full.min.js"></script> -->
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/font-awesome/js/all.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="assets/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="assets/js/custom.min.js"></script>
<!--Sweetalert plugin -->
<script src="assets/plugins/sweetalert/sweetalert.min.js"></script>
<script>
  const $dropdown = $(".dropdown");
  const $dropdownToggle = $(".dropdown-bs-toggle");
  const $dropdownMenu = $(".dropdown-menu");
  const showClass = "show";
  $(window).on("load resize", function() {
    if (this.matchMedia("(min-width: 768px)").matches) {
      $dropdown.hover(
        function() {
          const $this = $(this);
          $this.addClass(showClass);
          $this.find($dropdownToggle).attr("aria-expanded", "true");
          $this.find($dropdownMenu).addClass(showClass);
        },
        function() {
          const $this = $(this);
          $this.removeClass(showClass);
          $this.find($dropdownToggle).attr("aria-expanded", "false");
          $this.find($dropdownMenu).removeClass(showClass);
        }
      );
    } else {
      $dropdown.off("mouseenter mouseleave");
    }
  });
</script>