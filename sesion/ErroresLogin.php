    <?php

    $errors = [];
    $patron = '/^\w+([.-_+]?\w+)@\w+([.-]?\w+)(\.\w{2,10})+$/';

    if (!empty($_POST)) {

        $correo = trim($_POST['email']);
        $password = trim($_POST['password']);

        if (esNulo([$correo, $password])) {
            $errors[] = "Debe llenar todos los campos";
        }

        // Validar que el correo electrónico contenga al menos un "@" adicionalmente
        if (!strpos($correo, '@')) {
            $errors[] = "El Correo debe tener al menos una arroba (@)";
            return false;
        }

        if (!validarContraseniaLength($password)) {
            $errors[] = "La contraseña debe ser contener al menos 8 caracteres";
        }

        // Validar el correo electrónico con el patrón
        if (!preg_match($patron, $correo)) {
            $errors[] = "Correo no valido";
            return false;
        }

        if (count($errors) == 0) {
            $errors[] = login($correo, $password, $con);
        };
    }
