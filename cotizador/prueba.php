<!DOCTYPE html>
<html>
<head>
    <title>JQuery-validation demo | Bootstrap</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	 editar_cliente
    <script type="text/javascript" src="jquery-validation/lib/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="jquery-validation/dist/jquery.validate.js"></script>
</head>
<body>
<<<<<<< Updated upstream
   
                        <form id="editar_cliente" method="post" class="form-horizontal" action="">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="firstname">First name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" />
                                </div>
                            </div>
							 <div class="col-md-6">
                            <div class="form-outline">
                                <input type="text" class="form-control" id="mod_nomcom_cliente" name="mod_nomcom_cliente" onblur="this.value=this.value.toUpperCase();"/>
                                <label class="form-label" for="mod_nomcom_cliente">Nombre comercial</label>
                            </div>
                        </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="lastname">Last name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="username">Username</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="email">Email</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="password">Password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="confirm_password">Confirm password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 offset-sm-4">
                                    <div class="form-check">
                                        <input type="checkbox" id="agree" name="agree" value="agree" class="form-check-input" />
                                        <label class="form-check-label">Please agree to our policy</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-9 offset-sm-4">
                                    <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Sign up</button>
                                </div>
                            </div>
                    
    <script type="text/javascript">
    /*     $.validator.setDefaults({
=======
    <form id="editar_cliente" method="post" class="form-horizontal">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label" for="firstname">First name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" />
            </div>
        </div>
        <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="mod_nomcom_cliente">Nombre comercial</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="mod_nomcom_cliente" name="mod_nomcom_cliente" onblur="this.value=this.value.toUpperCase();" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label" for="lastname">Last name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label" for="username">Username</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label" for="email">Email</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label" for="password">Password</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label" for="confirm_password">Confirm password</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password" />
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 offset-sm-4">
                <div class="form-check">
                    <input type="checkbox" id="agree" name="agree" value="agree" class="form-check-input" />
                    <label class="form-check-label">Please agree to our policy</label>
                </div>
            </div>
        </div>
        <div class="form-group">
								<label for="club" class="col-lg-2 col-sm-2 control-label">Club</label>
								<div class="col-lg-4 col-sm-4">
									<select class="form-control" required="required" name="mod_club" id="mod_club">
										<option value="">Select</option>
										<option value="6700">6700</option>
										<option value="6701">6701</option>
										<option value="6702">6702</option>
										<option value="6703">6703</option>
										<option value="7600">Offsite</option>
									</select>
								</div>
        <div class="form-group row">
            <div class="col-sm-9 offset-sm-4">
                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Sign up</button>
            </div>
        </div>
        <script type="text/javascript">
            /*     $.validator.setDefaults({
>>>>>>> Stashed changes
            submitHandler: function() {
                alert("submitted!");
            }
        }); */
        $(document).ready(function() {
            $("#editar_cliente").validate({
                rules: {
                    firstname: "required",
                    lastname: "required",
					mod_nomcom_cliente:"required",
                    username: {
                        required: true,
                        minlength: 2
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
<<<<<<< Updated upstream
                    confirm_password: {
                        required: true,
                        minlength: 5,
                        equalTo: "#password"
=======
                    errorElement: "em",
                    errorPlacement: function(error, element) {
                        // Add the `invalid-feedback` class to the error element
                        error.addClass("invalid-feedback");
                    /*     if (element.prop("required") === "required") {
                            error.insertAfter(element.next("label"));
                        } else {
                            error.insertAfter(element);
                        } */
>>>>>>> Stashed changes
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    agree: "required"
                },
                messages: {
                    firstname: "Please enter your firstname",
                    lastname: "Please enter your lastname",
					mod_nomcom_cliente:"Ingrese nombre comercial",
                    username: {
                        required: "Please enter a username",
                        minlength: "Your username must consist of at least 2 characters"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    confirm_password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long",
                        equalTo: "Please enter the same password as above"
                    },
                    email: "Please enter a valid email address",
                    agree: "Please accept our policy"
                },
                errorElement: "em",
                errorPlacement: function(error, element) {
                    // Add the `invalid-feedback` class to the error element
                    error.addClass("invalid-feedback");
                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.next("label"));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-invalid").removeClass("is-valid");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-valid").removeClass("is-invalid");
                }
            });
        });
    </script>
</body>
</html>