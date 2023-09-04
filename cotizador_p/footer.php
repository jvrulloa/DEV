<!-- footer -->
<!-- ============================================================== -->
<footer class="footer">
  © 2015-2023 Cotizador web desarrollado por <a href='#' target='_blank'>#</a>
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- All Jquery -->
<!-- ============================================================== -->
<!--  <script src="assets/plugins/jquery/jquery.js"></script> -->
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/plugins/jquery/jquery.min.js"></script> 

  <!-- <script src="assets/plugins/mdb-bootstrap/js/mdb.min.js"></script> -->
  
  <script src="assets/plugins/bootstrap530/dist/js/bootstrap.min.js"></script>
<!--   <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> -->
    <script src="assets/plugins/bootstrap530/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="jquery-validation/lib/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="jquery-validation/dist/jquery.validate.js"></script> 
  <script src="assets/plugins/select2/select2.min.js"></script>
                    <!--Custom JavaScript -->
 <script src="assets/js/custom.min.js"></script>
   
                    <!--Sweetalert plugin -->
 <script src="assets/plugins/sweetalert/sweetalert.min.js"></script>
 
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
  
 $('#editCliente').on('shown.bs.modal change',function() {
 var selectedOption = document.getElementById('mod_tipo_cliente').value; // Obtener el valor seleccionado del select
  if (selectedOption == '1') {
    $('#mod_nomcom_cliente').val('');
    $('#mod_giro').val('').select2().trigger('selectionUpdate');
    $('#mod_nit').val('');
    $('#mod_registro').val('');
    $('#natural').slideUp(0);
    $('#natural2').slideUp(0);
    $('#estado_cli').removeClass();
    $('#tipo_cli').removeClass();
    $('#estado_cli').addClass('col-md-6');
    $('#tipo_cli').addClass('col-md-6');

  } else if(selectedOption == '2') {
    $('#natural').slideDown(0);
    $('#natural2').slideDown(0);
    $('#estado_cli').removeClass();
    $('#tipo_cli').removeClass();
    $('#estado_cli').addClass('col-md-3');
    $('#tipo_cli').addClass('col-md-3');

 } else if(selectedOption == '3') {
    $('#natural').slideUp(0);
    $('#natural2').slideDown(0);
    $('#estado_cli').removeClass();
    $('#tipo_cli').removeClass();
    $('#estado_cli').addClass('col-md-3');
    $('#tipo_cli').addClass('col-md-3');
 }

 else{
   $('#natural').slideDown();
    $('#natural2').slideDown();
    $('#estado_cli').removeClass();
    $('#tipo_cli').removeClass();
    $('#estado_cli').addClass('col-md-3');
    $('#tipo_cli').addClass('col-md-3');
 }
})
</script>