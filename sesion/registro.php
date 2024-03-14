<?php
    require 'config/config.php';
    require 'config/database.php';
    require 'clases/clienteFunciones.php';
    $db = new Database();
    $con = $db->conectar();
    include ("header.php");
    include ("ErroresRegistro.php");

?>

<body>

    <main>
        <div class="container">
            <h2>Datos del Cliente</h2>

            <?php mostrarMensajes($errors);?>

            <i><span class="text-danger">*</span>Obligatorio</i>
            <br><br>
            <form action="registro.php" method="post" class="row g-3" autocomplete="off">
                <div class="col-md-6">
                    <label for="nombres"><span class="text-danger">*</span>Nombres</label>
                    <input type="text" name="nombres" id="nombres" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="apellidos"><span class="text-danger">*</span>Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="email"><span class="text-danger">*</span>Correo Electronico</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                    <span id="validaEmail" class="text-danger" ></span>
                </div>
                <div class="col-md-6">
                    <label for="telefono"><span class="text-danger">*</span>Telefono</label>
                    <input type="text" name="telefono" id="telefono" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="usuario"><span class="text-danger">*</span>Usuario</label>
                    <input type="text" name="usuario" id="usuario" class="form-control" required>
                    <span id="validaUsuario" class="text-danger" ></span>
                </div>
                <div class="col-md-6">
                    <label for="password"><span class="text-danger">*</span>Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="repassword"><span class="text-danger">*</span>Repetir Contraseña</label>
                    <input type="password" name="repassword" id="repassword" class="form-control" required>
                </div>
                <div class="col-12">
                    <br>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
                <div class="">
                    <br><br>
                    <a href="politicapriv.php">Politica de privacidad</a>
                </div>
            </form>
        </div>
    </main>
    

<?php include ("../sections/footer.php");?>
