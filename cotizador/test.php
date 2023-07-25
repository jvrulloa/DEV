<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<form id="user" novalidate>
  <div>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="username">
  </div>
  <div>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="password">
  </div>
  
  <button type="submit">Enviar</button>
</form>
</body>


<script type="text/javascript">
// ...rest of the initial code omitted for simplicity.
const { body, validationResult } = require('express-validator');

app.post(
  '/user',
  // username must be an email
  body('username').isEmail(),
  // password must be at least 5 chars long
  body('password').isLength({ min: 5 }),
  (req, res) => {
    // Finds the validation errors in this request and wraps them in an object with handy functions
    const errors = validationResult(req);
    if (!errors.isEmpty()) {
      return res.status(400).json({ errors: errors.array() });
    }

    User.create({
      username: req.body.username,
      password: req.body.password,
    }).then(user => res.json(user));
  },
);

/* document.getElementById('myForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevenir envío del formulario por defecto

  // Obtener los valores de los campos
  var nombre = document.getElementById('nombre').value;
  var email = document.getElementById('email').value;

  // Realizar la validación utilizando Express Validator en el lado del cliente
  var validationResult = validateInput(nombre, email);

  if (validationResult.isValid) {
    // Los datos son válidos, puedes continuar con el procesamiento
    console.log('Datos válidos. Procesando formulario...');
    // Aquí puedes realizar las acciones necesarias, como enviar el formulario o realizar llamadas AJAX
  } else {
    // Los datos no son válidos, muestra los mensajes de error
    console.log('Datos no válidos. Verifica los errores:');
    console.log(validationResult.errors);
  }
});

function validateInput(nombre, email) {
  // Realiza la validación utilizando Express Validator
  // Aquí debes implementar tus propias reglas de validación utilizando Express Validator

  // Ejemplo de validación simple
  req.check('nombre', 'El nombre es obligatorio').notEmpty();
  req.check('email', 'El correo electrónico no es válido').isEmail();

  // Obtener los errores de validación
  var errors = req.validationErrors();

  // Retorna un objeto con el resultado de la validación
  return {
    isValid: !errors,
    errors: errors
  };
} */


</script>
</html>