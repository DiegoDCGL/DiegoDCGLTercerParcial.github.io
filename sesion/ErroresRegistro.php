<?php

$errors = [];

    if(!empty($_POST)){
        $nombres = trim($_POST['nombres']);
        $apellidos = trim($_POST['apellidos']);
        $email = trim($_POST['email']);
        $telefono = trim($_POST['telefono']);
        $usuario = trim($_POST['usuario']);
        $password = trim($_POST['password']);
        $repassword = trim($_POST['repassword']);

        if(esNulo([$nombres, $apellidos, $email, $telefono, $usuario, $password, $repassword]))
        {
            $errors[] = "Debe llenar todos los campos";
        }

        if (!validaPassword($password, $repassword)){
            $errors[] = "Las contraseñas no coinciden";
        }

        if(!validarContraseniaLength($password)) {
            $errors[] = "La contraseña debe ser mayor a 8 caracteres";
        }


        if(count($errors) == 0){

            $id = registraCliente([$nombres, $apellidos, $email, $telefono], $con);

            if($id > 0){

                require 'clases/Mailer.php';
                $mailer = new Mailer();
                $token = generarToken();
                $pass_hash = password_hash($password, PASSWORD_DEFAULT);
                
                $idUsuario = registraUsuario([$usuario, $pass_hash, $token, $id, $email], $con);
                if ($idUsuario > 0){

                    $url = SITE_URL.'/activar_cliente.php?id='.$idUsuario.'&token='.$token;
                    $asunto ="Activar cuenta";
                    $cuerpo = "Estimado $nombres: <br> Para continuar con el registro da click en la siguente liga <a href='$url'>Activar Cuenta<a/>";

                    if($mailer->enviarEmail($email, $asunto, $cuerpo)){
                        echo "Para terminar su registro siga las instrucciones que le enviamos a la direccion de correo electrónico <strong>$email</strong>";

                        exit;
                    }

                } else {
                    $errors[] = "Error al registrar Usuario";
                }
            } else {
                $errors[] = "Error al registrar Cliente";
            }
        }
    }

    //

?>

