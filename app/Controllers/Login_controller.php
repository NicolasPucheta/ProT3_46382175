<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuarios_model;

class Login_controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);
        // Aquí podrías cargar la vista de tu formulario de login, por ejemplo:
        // echo view('auth/login_view');
    }

    public function auth()
    {
        $session = session(); //iniciamos el objeto session
        $model = new Usuarios_model(); //instanciamos el modelo

        //traemos los datos del formulario
        $email = $this->request->getVar('email'); //correo
        $password = $this->request->getVar('pass'); //pass

        $data = $model->where('email', $email)->first();

        if ($data) {
            // Usuario encontrado, ahora verificamos la contraseña y el estado de baja
            $pass_hash_db = $data['pass']; // Contraseña hasheada de la base de datos
            $estado_baja = $data['baja'];

            if ($estado_baja == 'SI') {
                $session->setFlashdata('msg', 'Usuario dado de baja.');
                return redirect()->to('/login'); // Redirige a la página de login
            }

            $verify_pass = password_verify($password, $pass_hash_db);

            if ($verify_pass) {
                // Contraseña correcta, creamos la sesión
                // Aseguramos que 'id' exista antes de usarlo
                if (isset($data['id'])) {
                    $ses_data = [
                        'id'        => $data['id'],
                        'nombre'    => $data['nombre'],
                        'apellido'  => $data['apellido'],
                        'email'     => $data['email'],
                        'usuario'   => $data['usuario'],
                        'perfil_id' => $data['perfil_id'],
                        'logged_in' => TRUE
                    ];
                    $session->set($ses_data);
                    session()->setFlashdata('msg', '¡Bienvenido!');
                    return redirect()->to('/'); // Redirige a la página principal
                } else {
                    // Esto es un caso raro si el modelo funciona correctamente, pero lo manejamos
                    session()->setFlashdata('fail', 'Error de autenticación: ID de usuario no disponible.');
                    return redirect()->to('/login');
                }
            } else {
                // Contraseña incorrecta
                session()->setFlashdata('fail', 'Password incorrecto.');
                return redirect()->to('/login');
            }
        } else {
            // Usuario no encontrado por el email
            session()->setFlashdata('msg', 'No se encontró el email o el mismo es incorrecto.');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}