



<!-- select2 css -->

<!-- <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="assets/plugins/mdb-bootstrap/css/mdb.min.css" rel="stylesheet">
    <!--<link href="assets/plugins/bootstrap/css/docs.css" rel="stylesheet">-->
    <!-- Custom CSS -->
    <link href="assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet">
<body>
<div class="row">
                        <div class="col-md-6">
                             <div class="form-floating">
                                <select class="form-select select_giro" id="select_giro" name="select_giro" aria-label="Default select example">
                                    <option value=""></option>
                                </select>
                                <label class="form-label select-label activate" for="select_giro">Giro de cliente</label>
                             </div>
                        </div> 
                        <div class="col-md-3">
                            <div class="form-outline">
                                    <input type="text" class="form-control" id="mod_nit" name="mod_nit" required>
                                    <label class="form-label" for="form12">Nit del cliente</label>
                            </div>
                            
                        </div>
                        <div class="col-md-3">
                            <div class="form-outline">
                                    <input type="text" class="form-control" id="mod_registro"name="mod_registro" required>
                                    <label class="form-label" for="form12">Nº de registro fiscal</label>
                            </div>
                        </div>
</div>

<!-- jQuery -->


<script src="assets/plugins/mdb-bootstrap/js/mdb.min.js"></script>
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/plugins/select2/select2.min.js"></script>
  <script src="assets/js/custom.min.js"></script>
<script>

/* $(document).ready(function(){ */
$('#select_giro').select2({
ajax: {
url: "get_giro_copy.php",
type: "post",
dataType: 'json',
delay: 250,
data: function (params) {
return {
searchTerm: params.term // search term
};
},
processResults: function (response) {
return {
results: response
};
},
cache: true
}
});
/* }); */
</script>


</body>
                             
                            

