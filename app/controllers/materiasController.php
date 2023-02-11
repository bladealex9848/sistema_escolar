<?php

/**
 * Plantilla general de controladores
 * Versión 1.0.2
 *
 * Controlador de materias
 */
class materiasController extends Controller
{
  function __construct()
  {
    // Validación de sesión de usuario, descomentar si requerida    
    if (!Auth::validate()) {
      Flasher::new('Debes iniciar sesión primero.', 'danger');
      Redirect::to('login');
    }
  }

  function index()
  {
    $data =
      [
        'title' => 'Todas las materias',
        'slug'  => 'materias',
        'msg'   => 'Bienvenido al controlador de "materias", se ha creado con éxito si ves este mensaje.',
        'materias' => materiaModel::all()
      ];

    // Descomentar vista si requerida
    View::render('index', $data);
  }

  function ver($id)
  {
    View::render('ver');
  }

  function agregar()
  {

    $data =
      [
        'title' => 'Agregar materia',
        'slug'  => 'materias'
      ];

    View::render('agregar', $data);
  }

  function post_agregar()
  {
    try {
      if (!check_posted_data(['csrf', 'nombre', 'descripcion'], $_POST) || !Csrf::validate($_POST['csrf'])) {
        throw new Exception('Acceso no autorizado.');
        // Se detiene la ejecución del script y se redirige al usuario a la página anterior
        /*Flasher::deny();
        Redirect::back();*/
      }
      $nombre = clean($_POST['nombre']);
      $descripcion = clean($_POST['descripcion']);

      if (empty($nombre)) {
        throw new Exception('El nombre de la materia es requerido.');
      }

      if (empty($descripcion)) {
        throw new Exception('La descripción de la materia es requerida.');
      }
    } catch (PDOException $e) {
      Flasher::new($e->getMessage(), 'danger');
      Redirect::back();
    } catch (Exception $e) {
      Flasher::new($e->getMessage(), 'danger');
      Redirect::back();
    }
  }

  function editar($id)
  {
    View::render('editar');
  }

  function post_editar()
  {
  }

  function borrar($id)
  {
    // Proceso de borrado
  }
}
