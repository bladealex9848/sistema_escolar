<?php

class loginController extends Controller
{
  function __construct()
  {
    if (Auth::validate()) {
      Flasher::new('Ya hay una sesión abierta.');
      Redirect::to('bee/perfil');
    }
  }

  function index()
  {
    $data =
      [
        'title'   => 'Ingresar a tu cuenta',
        'padding' => '0px'
      ];

    View::render('index', $data);
  }

  function post_login()
  {
    try {
      if (!Csrf::validate($_POST['csrf']) || !check_posted_data(['usuario', 'csrf', 'password'], $_POST)) {
        throw new Exception(get_bee_message(0));
      }

      // Data pasada del formulario
      $usuario  = clean($_POST['usuario']);
      $password = clean($_POST['password']);

      // Información del usuario loggeado, simplemente se puede reemplazar aquí con un query a la base de datos
      // para cargar la información del usuario si es existente

      // Sesiones no persistentes con variables de sesión normales
      if (persistent_session() === false) {
        // Credenciales dummy de usuario, solo son usadas si BEE_COOKIES es false | settings.php

        // Verificar información del usuario
        if ($usuario !== $user['usuario'] || !password_verify($password . AUTH_SALT, $user['password'])) {
          throw new Exception('Las credenciales no son correctas.');
        }

        // Registrar la información en sesión
        Auth::login($user['id'], $user);
      } else {
        // Verificar información del usuario
        if (!$user = Model::list(BEE_USERS_TABLE, ['usuario' => $usuario], 1)) {
          throw new Exception('Las credenciales no son correctas.');
        }

        // Verifica el password del usuario con base al ingresado y el de la db
        if (!password_verify($password . AUTH_SALT, $user['password'])) {
          throw new Exception('Las credenciales no son correctas.');
        }

        // Sesiones totalmente persistentes con base a Cookies
        BeeSession::new_session($user['id']);

        // Recargar información de usuario
        $user = Model::list(BEE_USERS_TABLE, ['id' => $user['id']], 1);

        // Registrar la información en sesión
        Auth::login($user['id'], $user);
      }

      // Redirección a la página inicial después de log in
      Redirect::to('dashboard');
    } catch (Exception $e) {
      Flasher::error($e->getMessage());
      Redirect::back();
    }
  }
}