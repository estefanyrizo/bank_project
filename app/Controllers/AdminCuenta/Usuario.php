<?php
namespace App\Controllers\AdminCuenta;
use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class Usuario extends BaseController
{
    public function nuevo()
    {
        return view('cuenta_usuario');
    }
    public function agregar()
    {

        $db_model = new UsuarioModel();
        $request = \Config\Services::request();
        $registro = [
            'num_cedula' => $request->getPost('cedula'),
            'correo' => $request->getPost('correo'),
            'direccion' => $request->getPost('direccion'),
            'nombre' => $request->getPost('nombre'),
            'primer_apellido' => $request->getPost('apellido1'),
            'segundo_apellido' => $request->getPost('apellido2'),
            'telefono' => $request->getPost('telefono')
        ];

        if($id = $db_model->create($registro) > 0)
        {
            return redirect()->to (base_url(). '/login/nuevo')->with ('cedula', $request->getPost('cedula'));
        }
        else
        {
            return redirect()->to (base_url(). '/usuario/nuevo');
        }
    }
}

?>