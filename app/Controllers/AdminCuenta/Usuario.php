<?php
namespace App\Controllers\AdminCuenta;
use App\Controllers\BaseController;

class Usuario extends BaseController
{
    public function nuevo()
    {
        return view('cuenta_usuario');
    }
    public function agregar()
    {
        $request = \Config\Services::request();
        $registro = [
            'num_cedula' => $request->getPost('cedula'),
            'correo' => $request->getPost('correo'),
            'direccion' => $request->getPost('direccion'),
            'nombre' => $request->getPost('nombre'),
            'primer_apellido' => $request->getPost('apellido1'),
            'primer_apellido' => $request->getPost('apellido2')
        ];
    }
}

?>