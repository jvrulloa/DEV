<!-- HTML del modal -->
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="miModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="miModalLabel">Mi Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="miFormulario">
          <div class="mb-3">
            <label for="select1" class="form-label">Selecciona opción 1:</label>
            <select id="select1" name="select1" class="form-select validate">
              <option value="">Selecciona una opción</option>
              <option value="1">Opción 1</option>
              <option value="2">Opción 2</option>
              <!-- Agrega más opciones si es necesario -->
            </select>
          </div>
          <div class="mb-3">
            <label for="select2" class="form-label">Selecciona opción 2:</label>
            <select id="select2" name="select2" class="form-select validate">
              <option value="">Selecciona una opción</option>
              <option value="1">Opción A</option>
              <option value="2">Opción B</option>
              <!-- Agrega más opciones si es necesario -->
            </select>
          </div>
          <!-- Agrega más selects si es necesario -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" form="miFormulario" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Agrega el enlace a la librería de jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Agrega el enlace a la librería de jQuery Validate -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<!-- Agrega el enlace a la librería de Bootstrap 5 (popper.js ya incluido en la librería de Bootstrap) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<!-- Agrega el enlace a la librería de Select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
  $(document).ready(function() {
    // Inicializar los select2
    $('.validate').select2({
      placeholder: 'Selecciona una opción',
      // Otras opciones y configuraciones de Select2 si es necesario
    });

    // Configurar las reglas de validación para el formulario
    $('#miFormulario').validate({
      rules: {
        // Aplicar reglas de validación para los selects con la clase 'validate'
        // Puedes agregar más selects cambiando los nombres de los campos aquí
        select1: {
          required: true
        },
        select2: {
          required: true
        }
      },
      messages: {
        // Mensajes de error para cada select
        select1: {
          required: 'Este campo es obligatorio.'
        },
        select2: {
          required: 'Este campo es obligatorio.'
        }
      },
      errorElement: 'div',
      errorPlacement: function(error, element) {
        error.addClass('invalid-feedback');
        element.closest('.mb-3').append(error);
      },
      highlight: function(element, errorClass, validClass) {
        $(element).addClass('is-invalid').removeClass('is-valid');
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('is-invalid').addClass('is-valid');
      }
    });
  });
</script>
