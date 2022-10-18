<?php
namespace App\models;
use CodeIgniter\Model;

class UsuarioModel extends model
{
    protected $table = 'Cliente';

    public function leerUsuario()
    {
        return $this->findAll();
    }

    public function create($datos)
    {
        $tb_usuario = $this->db->table('Cliente');
        $tb_usuario->insert($datos);

        return $this->insertID();
    }
}