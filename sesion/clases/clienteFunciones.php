<?php

//FUNCION PARA SABER SI LOS CAMPOS QUE SE ESTAN LLENANDO ESTAN VACIOS
function esNulo(array $parametros)
{
    foreach ($parametros as $parametro) {
        if (strlen(trim($parametro)) < 1) {
            return true;
        }
    }
    return false;
}


//FUNCION QUE VALIDA QUE LAS CONTRASEÑAS SEAN IGUALES
function validaPassword($password, $repassword)
{
    if (strcmp($password, $repassword) === 0) {
        return true;
    }
    return false;
}

//FUNCION PARA GENERAR UN TOKEN EL CUAL VA A SER USADO PARA DAR EL ALTA AL USUARIO 
function generarToken()
{
    return md5(uniqid(mt_rand(), false));
}

//FUNCION QUE REALIZA UN INSERCION DE DATOS A LA TABLA CLIENTES EL CUAL CONTIENE LOS DATOS DEL CLIENTE Y SERÁN ALMACENADOS
function registraCliente(array $datos, $con)
{
    $sql = $con->prepare("INSERT INTO clientes (nombres, apellidos, email, telefono, estatus, fecha_alta) VALUES (?, ?, ?, ?, 1, now())");
    if ($sql->execute($datos)) {
        return $con->lastInsertId();
    }
    return 0;
}

//FUNCIÓN QUE REALIZA UNA INSERCION DE DATOS A LA TABLA USUARIOS EL CUAL CONTIENE EL USUARIO DEL CLIENTE 
function registraUsuario(array $datos, $con)
{

    $sql = $con->prepare("INSERT INTO usuarios (usuario, password, token, id_cliente, email) VALUES (?, ?, ?, ?,? )");
    if ($sql->execute($datos)) {
        return $con->lastInsertId();
    }
    return 0;
}

//FUNCION QUE VALIDA SI UN USUARIO YA EXISTE EN LA BASE DE DATOS
function usuarioExiste($usuario, $con)
{
    $sql = $con->prepare("SELECT id FROM usuarios WHERE usuario LIKE ? LIMIT 1");
    $sql->execute([$usuario]);
    if ($sql->fetchColumn() > 0) {
        return true;
    }
    return false;
}

//FUNCION QUE VALIDAD SI EL CORREO DE UN USUARIO YA EXISTE DENTRO DE LA BASE DE DATOS 
function emailExiste($email, $con)
{
    $sql = $con->prepare("SELECT id FROM clientes WHERE email LIKE ? LIMIT 1");
    $sql->execute([$email]);
    if ($sql->fetchColumn() > 0) {
        return true;
    }
    return false;
}

//FUNCION QUE SIRVE PARA MOSTRAR LOS ERRORES 
function mostrarMensajes(array $Errores)
{
    if (count($Errores) > 0) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><ul>';
        foreach ($Errores as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '</ul>';
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }
}

//FUNCION QUE SIRVE PARA VALIDAR LOS TOKENS
function validaToken($id, $token, $con)
{
    $msg = "";
    $sql = $con->prepare("SELECT id FROM usuarios WHERE id = ? AND token LIKE ? LIMIT 1");
    $sql->execute([$id, $token]);
    if ($sql->fetchColumn() > 0) {
        if (activarUsuario($id, $con)) {
            $msg = "Cuenta Activada.";
            echo ('<a href="login.php">Iniciar sesion</a>');
        } else {
            $msg = "Error al activar cuenta.";
        }
    } else {
        $msg = "No existe el registro del cliente.";
    }
    return $msg;
}


// FUNCION PARA ACTIVAR UN USUARIO
function activarUsuario($id, $con)
{
    $sql = $con->prepare("UPDATE usuarios SET activacion = 1 WHERE id = ?");
    return $sql->execute([$id]);
}

//VERIFICAR EL LARGO DE LA CONTRASEÑA QUE SEA IGUAL => 8
function validarContraseniaLength($password)
{
    if (strlen($password) > 7) {
        return  true;
    }
    return  false;
}


function login($correo, $password, $con)
{
    $sql = $con->prepare("SELECT id, usuario, password, email FROM usuarios WHERE email LIKE ? LIMIT 1");
    $sql->execute([$correo]);
    if ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        if (esActivo($correo, $con)) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                header("Location: ../sections/about.php");
                exit;
            }
        } else {
            return 'El usuario no ha sido activado.';
        }
    }
    return 'Error al iniciar sesión.';
}

//FUNCION DE PRUEBA PARA VERIFICAR QUE HAYA SESION SI NO HAY DE LO CONTRARIO VA A REDIRIGIR AL INICIO DE SESION O AL LOGIN.PHP

function verificarSesion($redirigir = true)
{
    //session_start();
    if (!isset($_SESSION['user_id'])) {
        // No hay sesión activa
        if ($redirigir) {
            header("Location:../sesion/login.php");
            exit();
        } else {
            return false;
        }
    }

    return true;
}

/*   */


//FUNCION PARA VERIFICAR SI UN CLIENTE YA ESTA ACTIVADO
function esActivo($correo, $con)
{
    $sql = $con->prepare("SELECT activacion FROM usuarios WHERE email LIKE ? LIMIT 1");
    $sql->execute([$correo]);
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    if ($row['activacion'] == 1) {
        return true;
    }
    return false;
}


//FUNCION LA CUAL SE SOLICITA LA RECUPERACION DEL PASSWORD
function solicitaPassword($user_id, $con)
{

    $token = generarToken();

    $sql = $con->prepare("UPDATE usuarios SET token_password=?, password_request=1 WHERE id = ?");
    if ($sql->execute([$token, $user_id])) {
        return $token;
    }
    return null;
}

//FUNCION PARA REALIZAR LA PETICION DE UN TOKEN

function verificaTokenRequest($user_id, $token, $con)
{
    $sql = $con->prepare("SELECT id FROM usuarios WHERE id = ? AND token_password LIKE ? AND password_request=1 LIMIT 1");
    $sql->execute([$user_id, $token]);
    if ($sql->fetchColumn() > 0) {
        return true;
    }
    return false;
}

//FUNCION QUE REALIZA ACTUALIZACION DE UN PASSWORD
function actualizaPassword($user_id, $password, $con)
{
    $sql = $con->prepare("UPDATE usuarios SET password=?, token_password = '', password_request = 0 WHERE id = ?");
    if ($sql->execute([$password, $user_id])) {
        return true;
    }
    return false;
}
