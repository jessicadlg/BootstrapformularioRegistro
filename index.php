<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#"/>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registro</title>
</head>
<body>
<header style="height: 70px">
</header>
<div style="height: 30px;"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
                <div class="card-header text-center">Formulario de registro</div>
                <div class="card-body">
                    <form id="form1" action="procesar.php" method="post" class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="nombre">Nombre</label>
                                <input name="nombre" type="text" class="form-control" id="nombre" placeholder=""
                                       value="" required>
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="apellido">Apellido</label>
                                <input name="apellido" type="text" class="form-control" id="apellido" placeholder=""
                                       value="" required>
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="direccion">Dirección</label>
                                <input name="direccion" type="text" class="form-control" id="direccion" placeholder=""
                                       required>
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="localidad">Localidad</label>
                                <select name="localidad" type="text" class="custom-select" id="localidad" placeholder=""
                                        required>
                                    <option value="0" selected disabled="disabled" > Seleccione una localidad</option>
                                    <option value="1">Morón</option>
                                    <option value="2">San justo</option>
                                    <option value="3">Haedo</option>
                                    <option value="4">Ramos Mejia</option>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Seleccione una localidad.</div>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="fecha_nacimiento">Fecha nacimiento</label>
                                <input name="fecha_nacimiento" type="date" class="form-control" id="fecha"
                                       placeholder="dd/mm/aaaa" required>
                                <div class=" valid-feedback">¡Ok válido!<i class="fas fa-check-circle"></i></div>
                                <div class="invalid-feedback"> Por favor ingrese su fecha de nacimiento.
                                </div>
                            </div>


                            <div class="col-md-6 mb-3">
                                <label for="usuario">Nombre de usuario</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text " id="inputGroupPrepend">@</span>
                                    </div>
                                    <input name="usuario" type="text" class="form-control" id="usuario"
                                           placeholder=""
                                           aria-describedby="inputGroupPrepend" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="email">Email</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder=""
                                       required>
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="password">Contraseña</label>
                                <input name="password" type="password" class="form-control" id="password"
                                       placeholder=""
                                       required>
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="password">Reingrese su contraseña</label>
                                <input name="password" type="password" class="form-control" id="re_password"
                                       placeholder=""
                                       required>
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                       required>
                                <label class="form-check-label" for="invalidCheck">Acepto términos y
                                    condiciones</label>
                                <div class="valid-feedback">¡Aceptado!</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-info " type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="jquery/jquery-3.3.1.min.js"></script>
<script src="popper/popper.min.js"></script>
<script src="bootstrap4/js/bootstrap.min.js"></script>
<script src="codigo.js"></script>
</body>
</html>